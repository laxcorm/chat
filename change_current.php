<?php
session_start();
if ($id = $_GET['id']) {

    $_SESSION['current_chat'] = $id;
}

echo $_SESSION['current_chat'];
