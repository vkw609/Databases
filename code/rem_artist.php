<?php
include_once 'header.php';

  if(isset($_POST['submit'])){
	if(isset($_GET['go'])){
		$artistName=$_POST['artistName'];
		//connect  to the database
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "musicdb";

		$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die ('I cannot connect to the database  because: ' . mysqli_error($conn)); ;
		
		$sql="DELETE
					FROM artist
					WHERE artistName = '" . $artistName . "';";
					
		$result=mysqli_query($conn, $sql) or die('Run Query Failed: '. mysqli_error($conn));
		//$row=mysqli_fetch_array($result);
		
		print("<html style='font-family:Courier; font-size:14'><body background='lightblue.jpg'>");
		
		if($result){
			$sql2="SELECT *
				FROM artist 
				WHERE artistName = '" . $artistName . "';"; 
			$result2=mysqli_query($conn, $sql2) or die('Run Query Failed: '. mysqli_error($conn));
			if(isset($result2)){
				print("<h2 style='font-size:22; text-align:center;'>Artist Removed</h2><table style='width:50%; text-align:left'> <th>Artist Name</th> <th>Artist ID</th> ");
				while($row=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
					printf("<tr><td>%s</td> <td>%s</td> </tr>",$row["artistName"],$row["artistId"]);
				}
				print("</table>");
			}
		}
		
		print("</body></html>");
		
		
		
	}
  }