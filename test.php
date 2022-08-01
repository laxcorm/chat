<?php
require('mysqli.php');

// $table = '4_8';
// $login = 'Zjeij';
// $message = 'fjdj djkoswjdof jkwoskjed';
/* $message = $_POST['message'];
$table = $_SESSION['current_chat'];
$login = $_SESSION['user']['login']; */

/* try {
    $query = "INSERT INTO $table (login, message) VALUES($login, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('s', $message);
    $stmt->execute();
} catch (
    mysqli_sql_exception $e
) {
    echo $e->getMessage();
}  */


$q = "SELECT message FROM  3_14 WHERE id = 10";

$res = $mysqli->query($q);
$line = $res->fetch_all(MYSQLI_ASSOC)[0];
var_dump($line);