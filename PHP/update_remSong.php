<?php
	include_once 'header.php';
?>

<!DOCTYPE>
<html style = "text-align: center;">
  <head>
    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
    <title>Music DataBase</title>
    <h1 style = "font-size:60px; color: #6699CC; font-family: broadway">Remove Song</h1>
  </head>
  <body background="add-remove.jpg">
  
  <form method="post" action="rem_song.php?go"  id="updateform">
      <input  type="text" name="songName" placeholder="Song Name"><br>
      <input  type="submit" name="submit" value="Remove">
    </form>
  
  
  
  
  </body>
 </html>