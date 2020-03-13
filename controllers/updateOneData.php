<?php
session_start();
var_dump($_POST);

$name = strtolower($_POST['profileName']);
$desc = $_POST['profileDesc'];


$host = 'localhost';
$dbname = 'mythic';
$username = 'root';
$password = '0000';
$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);


$sth = $db->prepare("UPDATE users SET name = '$name', description = '$desc'  WHERE id = '$_POST[idChange]'");

$sth->bindParam(':name', $name);
$sth->bindParam(':description', $description);

$sth->execute();

header('Location: ../users.php');
