<?php
 date_default_timezone_set('Europe/Istanbul');
 
$user = "webirent_zir";
$password = "Delete386";
 
try {
    $db = new PDO("mysql:host=localhost; dbname=webirent_zir; charset=utf8",$user,$password);
} catch (PDOException $e) {
	echo 'Veri Taban覺na ba