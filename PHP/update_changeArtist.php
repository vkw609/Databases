<?php
	include_once 'header.php';
?>

<!DOCTYPE>
<html style = "text-align: center;">
  <head>
    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
    <title>Music DataBase</title>
    <h1 style = "font-size:60px; color: #6699CC; font-family: broadway">Update Artist</h1>
  </head>
  <body background="add-remove.jpg">
  
  <form method="post" action="change_artist.php?go"  id="updateform">
	  <input  type="text" name="artistName" placeholder="Artist Name"><br>
	  <h4>Update</h4>
	  <input  type="text" name="newartistName" placeholder="New Artist Name"><br>
	  <input  type="text" name="newinstrument" placeholder="New Instrument"><br>
      <input  type="submit" name="submit" value="Change">
    </form>
  
  
  
  
  </body>
 </html>