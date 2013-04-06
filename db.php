<?php
$db = mysql_connect("localhost");
if ( $db === FALSE ) die('Fail message');
if ( mysql_select_db("music") === FALSE ) die("Fail message");
?>
