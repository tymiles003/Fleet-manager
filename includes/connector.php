<?php
$mysql_user = 'fleet';
$mysql_password = 'pass';
$db_name = 'fleet';
$debug = false;

$link = mysql_connect('localhost:8889', $mysql_user, $mysql_password);
if (!$link) {
	if($debug){
    die('Could not connect: ' . mysql_error());
	}
}

$db_selected = mysql_select_db($db_name, $link);
if (!$db_selected) {
	if($debug){
    die ('Can\'t use' . $db_name  . mysql_error());
}
}else{
	if($debug){
	echo 'Connected to ' . $db_name . ' DB successfully';
	}
}

mysql_close($link);
?>