<?php
	include_once 'header.php';
?>

<!DOCTYPE>
<html style = "text-align: center;">
  <head>
    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
    <title>Music DataBase</title>
    <h1 style = "font-size:60px; color: #6699CC; font-family: broadway">Drop dBase</h1>
    <p>A project created by Matthew, Isaac, Emmanuel, Ashley</p>
  </head>
  <body background="background1.jpeg">

  <p>
    <h3>Search Music DB</h3>
    <form method="post" action="search_artist.php?go"  id="searchform">
      <input  type="text" name="name" placeholder="Artist Name">
      <input  type="submit" name="submit" value="Search">
    </form>

    <form  method="post" action="search_song.php?go"  id="searchform">
      <input  type="text" name="name" placeholder="Song">
      <input  type="submit" name="submit" value="Search">
    </form> 

	<form  method="post" action="search_genre.php?go"  id="searchform">
      <input  type="text" name="name" placeholder="Genre">
      <input  type="submit" name="submit" value="Search">
    </form> 
	
	<form  method="post" action="search_album.php?go"  id="searchform">
      <input  type="text" name="name" placeholder="Album">
      <input  type="submit" name="submit" value="Search">
    </form> 

    <form  method="post" action="search_artistId.php?go"  id="searchform">
      <input  type="text" name="name" placeholder="Artist Id">
      <input  type="submit" name="submit" value="Search">
    </form> 

    <form  method="post" action="search_songId.php?go"  id="searchform">
      <input  type="text" name="name" placeholder="Song Id">
      <input  type="submit" name="submit" value="Search">
    </form> 

	<form  method="post" action="search_albumId.php?go"  id="searchform">
      <input  type="text" name="name" placeholder="Album Id">
      <input  type="submit" name="submit" value="Search">
    </form> 

	</form>
  </p>

  <p>
    <h3>Update Music DB</h3>
	<h4>ADD</h4>
    <form>
		<input type="button" value="Song" onclick="window.location.href='update_addSong.php'" />
		<input type="button" value="Artist" onclick="window.location.href='update_addArtist.php'" />
		<input type="button" value="Album" onclick="window.location.href='update_addAlbum.php'" />
	</form> 
	<h4>REMOVE</h4>
    <form>
		<input type="button" value="Song" onclick="window.location.href='update_remSong.php'" />
		<input type="button" value="Artist" onclick="window.location.href='update_remArtist.php'" />
		<input type="button" value="Album" onclick="window.location.href='update_remAlbum.php'" />
	</form> 
	<h4>UPDATE</h4>
    <form>
		<input type="button" value="Song" onclick="window.location.href='update_changeSong.php'" />
		<input type="button" value="Artist" onclick="window.location.href='update_changeArtist.php'" />
		<input type="button" value="Album" onclick="window.location.href='update_changeAlbum.php'" />
	</form> 
  </p>




	
	</body>
</html>
