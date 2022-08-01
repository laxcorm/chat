<?php
session_start();

require('mysqli.php');
//вывод чата по запросу из поисковой строки

$id = $_GET['id'];
//$messages = "";


if ($_SESSION['user']['id'] < $id) {
    $_SESSION['current_chat'] = $_SESSION['user']['id'] . "_" . $id;
} else {
    $_SESSION['current_chat'] = $id . "_" . $_SESSION['user']['id'];
}

if (!empty($_SESSION['chats'])) {
    if ((array_search($_SESSION['current_chat'], $_SESSION['chats'])) == false) {
        echo "first";
    }
} else {
    echo "first";
}




/* if (!empty($_SESSION['chats'])) {
    if ((array_search($_SESSION['current_chat'], $_SESSION['chats'])) !== false) {
        
        $query = "SELECT id,message,time FROM {$_SESSION['current_chat']} LIMIT 5";

        $result = $mysqli->query($query);

        $chat = $result->fetch_all(MYSQLI_ASSOC);

        //создание блоков .$messages
    } else {
        echo "first";
    }
} else {
    echo "first";
} */

