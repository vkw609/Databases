<?php
include_once 'header.php';

  if(isset($_POST['submit'])){
	if(isset($_GET['go'])){
		$artistName=$_POST['artistName'];
		$albumName=$_POST['albumName'];
		$genre=$_POST['genre'];
		$numSongs=$_POST['numSongs'];
		$releaseYear=$_POST['releaseYear'];
		$albumId=rand(501,999);
		//echo $instrument;
		//connect  to the database
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "musicdb";

		$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die ('I cannot connect to the database  because: ' . mysqli_error($conn)); ;
		
		$sqlartId="SELECT artistId 
					FROM artist
					WHERE artistName = '" . $artistName . "';";
					
		$resultAID=mysqli_query($conn, $sqlartId) or die('Run Query Failed: '. mysqli_error($conn));
		$row=mysqli_fetch_array($resultAID,MYSQLI_BOTH);
		if($row['artistId']!=null){
			$artistId=$row['artistId'];
		}else {
			$artistId=rand(199,999);
		}
		
		$sql="INSERT INTO album(artistId,artistName,albumName,albumId,releaseYear,genre,numSongs)
				VALUES('$artistId','$artistName','$albumName','$albumId','$releaseYear','$genre','$numSongs');";
				
		$result=mysqli_query($conn, $sql) or die('Run Query Failed: '. mysqli_error($conn));
		
		print("<html style='font-family:Courier; font-size:14'><body background='lightblue.jpg'>");
		
		if($result){
			$sql2="SELECT *
				FROM album 
				WHERE  albumName = '" . $albumName . "';"; 
			$result2=mysqli_query($conn, $sql2) or die('Run Query Failed: '. mysqli_error($conn));
			if(isset($result2)){
				print("<h2 style='font-size:22; text-align:center;'>Arist ADDED</h2><table style='width:50%; text-align:left'> <th>Arist Name</th> <th>Album Name</th> <th>Artist ID</th> <th>Album ID</th><th>Release Year</th> <th>Number of Songs</th> <th>Genre</th>");
				while($row=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
					printf("<tr><td>%s</td> <td>%s</td> <td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$row["artistName"],$row["albumName"],$row["artistId"],$row["albumId"],$row["releaseYear"],$row["numSongs"],$row["genre"]);
				}
				print("</table>");
			}
		}
		
		print("</body></html>");
		
		
		
	}
  }