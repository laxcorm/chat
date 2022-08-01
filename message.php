<?php
session_start();
require('mysqli.php');
$message = trim($_POST['message']);
$table = $_SESSION['current_chat'];
$login = $_SESSION['user']['login'];

if ($message !== "") {
    $query = "INSERT INTO $table (login, message) VALUES(?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ss', $login, $message);
    $stmt->execute();
}



/* $id = $_SESSION['id'];

$table = $_GET['table'];

$message = $_GET['message'];


$stmt_message = $mysqli->prepare($query);

$stmt_message->bind_param("is", $id, $message);

$stmt_message->execute(); */



