

<?php
include_once 'header.php';

  if(isset($_POST['submit'])){
	if(isset($_GET['go'])){
		$artistName=$_POST['name'];
		//connect  to the database
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "musicdb";

		$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die ('I cannot connect to the database  because: ' . mysqli_error($conn)); ;
		
		$sql="SELECT *
				FROM artist 
				WHERE  artistName = '" . $artistName . "';"; 
		$sql2="SELECT *
				FROM songs 
				WHERE  artistName = '" . $artistName . "';"; 
		$sql3="SELECT *
				FROM album 
				WHERE  artistName = '" . $artistName . "';"; 
		//printf("%s ",$sql);
		$result=mysqli_query($conn, $sql) or die('Run Query Failed: '. mysqli_error($conn));
		$result2=mysqli_query($conn, $sql2) or die('Run Query Failed: '. mysqli_error($conn));
		$result3=mysqli_query($conn, $sql3) or die('Run Query Failed: '. mysqli_error($conn));

		print("<html style='font-family:Courier; font-size:14'><body background='lightblue.jpg'>");
	
		if(isset($result)){
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			print("<h2 style='font-size:22; text-align:center;'>ARTIST</h2><table style='width:50%; text-align:left;'> <th >Arist ID</th> <th>Artist Name</th>");
			printf("<tr><td>%s</td> <td>%s</td></tr>",$row["artistId"],$row["artistName"]);
			print("</table>");
		}
		if(isset($result2)){
			print("<h2 style='font-size:22; text-align:center;'>SONGS</h2><table style='width:50%; text-align:left'> <th>Arist Name</th> <th>Song Name</th> <th>Duration</th> <th>Release Year</th>");
			while($row=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
				printf("<tr><td>%s</td> <td>%s</td> <td>%s</td><td>%s</td></tr>",$row["artistName"],$row["songName"],$row["duration"],$row["releaseYear"]);
			}
			print("</table>");
		}
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