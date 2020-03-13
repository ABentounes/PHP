<?php

$host = 'localhost';
$dbname = 'mythic';
$username = 'root';
$password = '0000';

$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

$sth = $db->prepare('SELECT id, name, description FROM users');
$sth->execute();
$users = $sth->fetchAll(PDO::FETCH_ASSOC);

// var_dump($users);
?>