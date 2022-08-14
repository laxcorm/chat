<?php
session_start();
require 'mysqli.php';

$table = $_SESSION['current_chat'];



$id = isset($_GET['id']) ? $_GET['id'] . ',' : '';


// if (!isset($_GET['id'])) {
if (in_array($table, $_SESSION['chats'])) {
    $query = "SELECT * FROM $table ORDER BY ID DESC LIMIT $id 5";

    $result_dialog = $mysqli->query($query);

    $dialog = $result_dialog->fetch_all(MYSQLI_ASSOC);
}
echo json_encode($dialog);






// } elseif (isset($_GET['id'])) {
//     $last_id = $_GET['id'];
//     $query = "SELECT * FROM $table ORDER BY ID DESC LIMIT $last_id, 5";
//     $result_dialog = $mysqli->query($query);
//     $dialog = $result_dialog->fetch_all(MYSQLI_ASSOC);
//     echo json_encode($dialog);

// }
