<?php
include_once 'header.php';

  
		//connect  to the database
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "musicdb";

		$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die ('I cannot connect to the database  because: ' . mysqli_error($conn)); ;
		
		$sql="SELECT *
				FROM artist; "; 
		
		$result=mysqli_query($conn, $sql) or die('Run Query Failed: '. mysqli_error($conn));
		

		print("<html style='font-family:Courier; font-size:14'><body background='lightblue.jpg'>");
	
		if(isset($result)){
			print("<h2 style='font-size:22; text-align:center;'>Artist</h2><table style='width:50%; text-align:left'> <th>Arist Name</th> <th>Artist ID</th> <th>Instrument</th> ");
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				printf("<tr><td>%s</td> <td>%s</td> <td>%s</td></tr>",$row["artistName"],$row["artistId"],$row["instrument"]);
			}
			print("</table>");
		}

		
		print("</body></html>");
		
		
	
  
?>