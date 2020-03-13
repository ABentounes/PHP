<?php
session_start();
var_dump($_POST);

$host = 'localhost';
$dbname = 'mythic';
$username = 'root';
$password = '0000';

$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

$sth = $db->prepare("DELETE FROM users WHERE id = $_POST[idDelete]");
$sth->execute();
var_dump($_SESSION);

if ($_SESSION['id'] == $_POST['idDelete']) {
    header('Location: ./disconnect.php'); die;
} else {
    header('Location: ../users.php'); die;
}