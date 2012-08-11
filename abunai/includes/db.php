<?php

$user = getenv('MYSQL_USERNAME');
$pass = getenv('MYSQL_PASSWORD');
$host = getenv('MYSQL_DB_HOST');
$dbname = getenv('MYSQL_DB_NAME');

$data_source = sprintf('mysql:host=%s;dbname=%s', $host, $dbname);

//PDO -> php data objects
$db = new PDO($data_source, $user, $pass);
//Make the connection to speak in UTF 8 - don't expect anything back
$db->exec('SET NAMES utf8');