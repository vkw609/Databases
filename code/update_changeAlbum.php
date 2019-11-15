<?php
	include_once 'header.php';
?>

<!DOCTYPE>
<html style = "text-align: center;">
  <head>
    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
    <title>Music DataBase</title>
    <h1 style = "font-size:60px; color: #6699CC; font-family: broadway">Add Album</h1>
  </head>
  <body background="add-remove.jpg">
  
  <form method="post" action="change_album.php?go"  id="updateform">
      <input  type="text" name="albumName" placeholder="Album Name"><br>
	  <h4>Update</h4>
	  <input  type="text" name="newalbumName" placeholder="New Album Name"><br>
	  <input  type="text" name="newartistName" placeholder="New Artist Name"><br>
	  <input  type="text" name="newreleaseYear" placeholder="New Release Year"><br>
	  <input  type="text" name="newgenre" placeholder="New Genre"><br>
	  <input  type="text" name="newnumSongs" placeholder="New Number of Songs"><br>
      <input  type="submit" name="submit" value="Update">
    </form>
  
  
  
  
  </body>
 </html>