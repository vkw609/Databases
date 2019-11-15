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
  
  <form method="post" action="add_album.php?go"  id="updateform">
      <input  type="text" name="albumName" placeholder="Album Name"><br>
	  <input  type="text" name="artistName" placeholder="Artist Name"><br>
	  <input  type="text" name="releaseYear" placeholder="Release Year"><br>
	  <input  type="text" name="genre" placeholder="Genre"><br>
	  <input  type="text" name="numSongs" placeholder="Number of Songs"><br>
      <input  type="submit" name="submit" value="Add">
    </form>
  
  
  
  
  </body>
 </html>