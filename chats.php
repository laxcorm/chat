<?php
require('mysqli.php');
//то же что и login - поиск юзеров
//$user = найти как добавить юзера 
$query = "SHOW TABLES LIKE '%_$user' AND '$user_%'";
$result = $mysqli -> query($query);
$chats = $result->fetch_all();
$chats = $chats[0];
echo json_encode($chats);