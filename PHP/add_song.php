<?php
include_once 'header.php';

  if(isset($_POST['submit'])){
	if(isset($_GET['go'])){
		$songName=$_POST['songName'];
		$artistName=$_POST['artistName'];
		$releaseYear=$_POST['releaseYear'];
		$genre=$_POST['genre'];
		$duration=$_POST['duration'];
		$songId=rand();
		//echo $songId;
		//connect  to the database
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "musicdb";

		$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die ('I cannot connect to the database  because: ' . mysqli_error($conn)); ;
		
		$sql="INSERT INTO songs(songId,songName,artistName,releaseYear,genre,duration)
				VALUES('$songId','$songName','$artistName','$releaseYear','$genre','$duration');";
				
		$result=mysqli_query($conn, $sql) or die('Run Query Failed: '. mysqli_error($conn));
		
		print("<html style='font-family:Courier; font-size:14'><body background='lightblue.jpg'>");
		
		if($result){
			$sql2="SELECT *
				FROM songs 
				WHERE  songName = '" . $songName . "';"; 
			$result2=mysqli_query($conn, $sql2) or die('Run Query Failed: '. mysqli_error($conn));
			if(isset($result2)){
				print("<h2 style='font-size:22; text-align:center;'>SONG ADDED</h2><table style='width:50%; text-align:left'> <th>Arist Name</th> <th>Song Name</th> <th>Duration</th> <th>Release Year</th>");
				while($row=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
					printf("<tr><td>%s</td> <td>%s</td> <td>%s</td><td>%s</td></tr>",$row["artistName"],$row["songName"],$row["duration"],$row["releaseYear"]);
				}
				print("</table>");
			}
		}
		
		print("</body></html>");
		
		
		
	}
  }