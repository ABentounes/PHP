<?php

$inputName = lcfirst($_POST['name']);
$inputPassword = md5($_POST['password']);

$host = 'localhost';
$dbname = 'mythic';
$username = 'root';
$password = '0000';

$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

$sth = $db->prepare('SELECT id, name, password, indexImg, indexDesc FROM users');
$sth->execute();
$users = $sth->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {

    if ($inputName == $user['name'] && $user['password'] == $inputPassword){
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = ucfirst($user['name']);
        $_SESSION['descCheck'] = $user['indexDesc'];
        $_SESSION['imgCheck'] = $user['indexImg'];
        header('Location: /'); die;
    }
}

header('Location:../login.php');
