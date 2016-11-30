<?php
include "startpage.php";

$table = "ENTRIES";
mysql_query = ("CREATE TABLE IF NOT EXISTS '$table' ( 'ID' INT NOT NULL AUTO_INCREMENT . PRIMARY KEY ('id'))");
mysql_query = ("ALTER TABLE '$table' ADD 'TITLE' TEXT  NOT NULL");
mysql_query = ("ALTER TABLE '$table' ADD 'SUMMARY' TEXT  NOT NULL");
mysql_query = ("ALTER TABLE '$table' ADD 'CONTENT' TEXT  NOT NULL");



?>