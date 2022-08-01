<?php
//файл должен выводится по запросу ajax - бейджи для всех диалогов
require('mysqli.php');

$id = $_GET['id'];

$query = "SHOW TABLES LIKE '{$id}_%' and '%_$id'";

$result = $mysqli->query($query);

$tables_list = $result->fetch_all(MYSQLI_NUM);


foreach ($tables_list as $value) {
    foreach ($value as $table) {
        $tables[] = $table;
    }
}

 $tables = str_replace("{$id}_", "", $tables);
 $tables = str_replace("_$id", "", $tables);

$query = "SELECT login FROM users WHERE id = $id";

foreach ($tables as $table) {

   str_replace("{$id}_", "", $tables, $count);
   if(!($count>0))
   { $tables = str_replace("_$id", "", $tables);}

   //лучше вести поиск по имени

   $last_message = "SELECT message FROM $table ORDER BY id DESC LIMIT 1 ";

    $result = $mysqli->query($last_message);
    $last_message = $result -> fetch_assoc()[0]['message'];
//badge($id, $last_message);
    //найти статус 
}