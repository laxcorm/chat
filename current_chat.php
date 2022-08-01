<?php
session_start();
require('mysqli.php');

$table = $_SESSION['current_chat'];


if (in_array($table, $_SESSION['chats'])) {
    $query = "SELECT * FROM $table ORDER BY ID DESC LIMIT 5";

    $result_dialog = $mysqli->query($query);

    $dialog = $result_dialog->fetch_all(MYSQLI_ASSOC);
}
// echo json_encode($dialog);

echo $_SESSION['user']['id'];
var_dump( $_SESSION['current_chat']);
var_dump($_SESSION['chats']);
