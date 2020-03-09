<?php

session_start();

$_SESSION['imgCheck'] = $_POST['imgCheck'];
$_SESSION['descCheck'] = $_POST['descCheck'];

header('Location: /');