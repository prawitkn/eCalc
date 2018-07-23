<?php
$is_local = true;

$link = null;
$pdo = null;

if($is_local){
	$serverName="localhost";
	$uid="root";
	$pwd="";
	$db="cr";

	$link = mysqli_connect($serverName, $uid, $pwd, $db);
	mysqli_set_charset($link, 'utf8');

	$pdo = new PDO('mysql:host='.$serverName.';dbname='.$db.';charset=utf8', $uid, $pwd, array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_EMULATE_PREPARES => false
	));
}else{
	$serverName="localhost";
	$uid="root";
	$pwd="";
	$db="cr";

	$link = mysqli_connect($serverName, $uid, $pwd, $db);
	mysqli_set_charset($link, 'utf8');

	$pdo = new PDO('mysql:host='.$serverName.';dbname='.$db.';charset=utf8', $uid, $pwd, array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_EMULATE_PREPARES => false
	));
}
