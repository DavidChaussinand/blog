<?php


$user= 'test';
$password ='test';

$pdo = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', $user, $password);
$stmt = $pdo->prepare('SELECT name FROM users WHERE id = :id');
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); // <-- filter your data first (see [Data Filtering](#data_filtering)), especially important for INSERT, UPDATE, etc.
$stmt->bindParam(':id', $id, PDO::PARAM_INT); // <-- Automatically sanitized for SQL by PDO
$stmt->execute();
