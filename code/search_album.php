<?php
include_once 'header.php';

  if(isset($_POST['submit'])){
	if(isset($_GET['go'])){
		$albumName=$_POST['name'];
		//connect  to the database
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "musicdb";

		$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die ('I cannot connect to the database  because: ' . mysqli_error($conn)); ;
		
		$sql3="SELECT *
				FROM album 
				WHERE  albumName = '" . $albumName . "';"; 
		//printf("%s ",$sql);
		$result3=mysqli_query($conn, $sql3) or die('Run Query Failed: '. mysqli_error($conn));

		print("<html style='font-family:Courier; font-size:14'><body background='lightblue.jpg'>");
	
		if(isset($result3)){
			print("<h2 style='font-size:22; text-align:center;'>ALBUMS</h2><table style='width:50%; text-align:left'> <th >Arist Name</th> <th>Album Name</th><th >Genre</th> <th>Release</th>");
			while($row=mysqli_fetch_array($result3,MYSQLI_ASSOC)){
				printf("<tr><td>%s</td> <td>%s</td><td>%s</td> <td>%s</td></tr>",$row["artistName"],$row["albumName"],$row["genre"],$row["releaseYear"]);
			}
			print("</table>");
		}
		
		print("</body></html>");
		
		}
	else{
		echo  "<p>Please enter a search query</p>";
	}
  }
?>