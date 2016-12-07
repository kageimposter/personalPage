<?php

/*session_start();
setcookie(session_name(),session_id(), time() + 2592000)
ob_implicit_flush();
    if( function_exits('ob_get_level'))
    { while(ob_get_level() > 0){
        ob_end_flush();
    }
}

if (get_magic_quotes_gpc()) {
	foreach ($_GET as $key => $val) {
		$_GET[$key] = stripslashes($val);
	}
	foreach ($_POST as $key => $val) {
		$_POST[$key] = stripslashes($val);
	}
}
if (get_magic_quotes_runtime()) {
	set_magic_quotes_runtime(0);
}

*/
//This IS FOR UPLOADING TO MYSQL
$server = "localhost"; 
$user = "browsePage";
$pass = "jackTheRipper";
$dbname = "fileServer";

//connect to the mysql server
$con = mysql_connect($server,$user,$pass, $dbname);
//if it fails
if($con->connect_error){
    die("Connection fail, reason: " . $con->connect_error);
}
//command for mysql
$command

$table = "IMAGES";
mysql_query = ("CREATE TABLE IF NOT EXISTS '$table' ( 'ID' INT NOT NULL AUTO_INCREMENT . PRIMARY KEY ('id'))");
mysql_query = ("ALTER TABLE '$table' ADD 'IMAGE' IMAGE BLOB");
mysql_query = ("ALTER TABLE '$table' ADD 'NAME' varchar(64)");
//mysql_query = ("ALTER TABLE '$table' ADD 'CONTENT' TEXT  NOT NULL");


?>