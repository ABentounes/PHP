<?php

$name = strtolower($_POST['name']);
$userPassword = md5($_POST['password']);
$description = $_POST['description'];


$host = 'localhost';
$dbname = 'mythic';
$username = 'root';
$password = '0000';

$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

$sth = $db->prepare("INSERT INTO users(name, password, description, indexImg, indexDesc) VALUES (:name, :password, :description, 'imgOn', 'DescOn')");

$sth->bindParam(':name', $name);
$sth->bindParam(':password', $userPassword);
$sth->bindParam(':description', $description);

$sth->execute();


header('Location: /');
