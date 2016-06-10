<?php
$host='localhost';
$dbname='todonote';
$user='root';
$pass='';
try {
	$connect = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
	echo 'Koneksi gagal. Panggil Administrator';
	exit();
}
?>