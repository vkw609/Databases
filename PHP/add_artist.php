<?php
include_once 'header.php';

  if(isset($_POST['submit'])){
	if(isset($_GET['go'])){
		$artistName=$_POST['artistName'];
		$instrument=$_POST['instrument'];
		$artistId=rand(199,999);
		//echo $instrument;
		//connect  to the database
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "musicdb";

		$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die ('I cannot connect to the database  because: ' . mysqli_error($conn)); ;
		
		$sql="INSERT INTO artist(artistId,artistName,instrument)
				VALUES('$artistId','$artistName','$instrument');";
				
		$result=mysqli_query($conn, $sql) or die('Run Query Failed: '. mysqli_error($conn));
		
		print("<html style='font-family:Courier; font-size:14'><body background='lightblue.jpg'>");
		
		if($result){
			$sql2="SELECT *
				FROM artist 
				WHERE  artistName = '" . $artistName . "';"; 
			$result2=mysqli_query($conn, $sql2) or die('Run Query Failed: '. mysqli_error($conn));
			if(isset($result2)){
				print("<h2 style='font-size:22; text-align:center;'>Arist ADDED</h2><table style='width:50%; text-align:left'> <th>Arist ID</th> <th>Artist Name</th> <th>Instrument</th>");
				while($row=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
					printf("<tr><td>%s</td> <td>%s</td> <td>%s</td></tr>",$row["artistId"],$row["artistName"],$row["instrument"]);
				}
				print("</table>");
			}
		}
		
		print("</body></html>");
		
		
		
	}
  }