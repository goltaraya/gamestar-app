<?php

session_start();

$db   = 'gamestar';
$host = '127.0.0.1';
$user = 'admin';
$pass = '1234';

$conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
