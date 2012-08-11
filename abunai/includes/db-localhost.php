<?php

$dsn = getenv('DATA_SOURCE');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');


$db = new PDO($dsn, $user, $pass);
$db->exec('SET NAMES utf8');
?>