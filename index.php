<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">

<script type="text/javascript">
$('.change_audio').on('click', function(e) {
    e.preventDefault();
	var new_src = $(this).attr('href');
    $('#source_mp3').attr('src',new_src);
$('#embed_mp3').attr('src',new_src);

});
</script>

<?php
require_once "db.php";

if ( isset($_POST['username']) && isset($_POST['password'])) {
   $n = $_POST['username'];
   $p = $_POST['password'];
   $sql = "INSERT INTO users (username, password) 
              VALUES ('$n', '$p')";
   echo "<p>\n$sql\n</p>\n";
   mysql_query($sql);
}

?>

</head>
<body>
<div id="tabs">
	<a id="songs">All Songs</a>
	<a id="genre">Genre</a>
	<a id="artists">Artists</a>
	<a id="albums">Albums</a>
</div>
<audio controls="controls" id="audio_player">
  <source id="source_mp3" src="song1.mp3" type="audio/mpeg">
  <embed id="embed_mp3" height="50" width="100" src="song1.mp3">
</audio>
<div id="maintext">
JukeBox.
</div>

<div id="logindiv">
<form method="post">
Name:
<input type="text" name="username" size="25"><br>
  Password:
<input type="password" name="password" size="25">
<input type="submit" value="Sign Up!"/>
</form>
</div>

<div id="blog">
<a class="change_audio" href="song1.mp3">Play Song 1</a><br>
<a class="change_audio" href="song2.mp3">Play Song 2</a><br>
<a class="change_audio" href="song3.mp3">Play Song 3</a><br>

</div>
</body>
</html>