<?php

session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['descCheck'] = 'descOn';
$_SESSION['imgCheck'] = 'imgOn';

header('Location: /');
