<?php
session_start();
require('mysqli.php');

$table = $_SESSION['current_chat'];
// $login = $_SESSION['user']['login'];

//вывод чата по запросу из поисковой строки
/* 
нет ничего
$id=$_GET['id'];
$messages ="";
if($_SESSION['user']['id']<$id)
{$table=$_SESSION['user']['id']."_".$id;}
else
{$table=$id."_".$_SESSION['user']['id'];} */



$query = "CREATE TABLE IF NOT EXISTS $table(
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(15) NOT NULL,
    message TEXT NOT NULL,
    time TIMESTAMP NOT NULL DEFAULT NOW(),
    is_read TINYINT NOT NULL DEFAULT 0
);";

$mysqli->query($query);




