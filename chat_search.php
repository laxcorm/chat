<?php
$id = $_GET['id'];

$user_id = $_SESSION['user']['id'];

if ($id < $user_id) {
    $table = "$id" . "$user_id";
} else {
    $table = "$user_id" . "$id";
}


