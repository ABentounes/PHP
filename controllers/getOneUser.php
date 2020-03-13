<?php

$host = 'localhost';
$dbname = 'mythic';
$username = 'root';
$password = '0000';

$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

$sth = $db->prepare("SELECT name, description FROM users WHERE id = '$_POST[idChange]' or id = '$idChange'");
$sth->execute();
$user = $sth->fetchAll(PDO::FETCH_ASSOC);

// var_dump($users);
