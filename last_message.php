<?php
session_start();
require('mysqli.php');
//бэйдж как файл chat.php

//$messages = [];

if ($chats = $_SESSION['chats']) {
  foreach ($chats as $chat) {
    $query = "SELECT * FROM  $chat ORDER BY id DESC LIMIT 1";
    $res = $mysqli->query($query);
    $messages[] = array_merge($res->fetch_all(MYSQLI_ASSOC)[0], ['chat' => $chat]);
  }
}
//переделать по сортировке времени 
$_SESSION['current_chat'] = $messages[0]['chat'];

if ($messages !== NULL) {
  echo json_encode($messages);
}

            /* '<a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small class="text-muted">And some muted small print.</small>
          </a>'; */


/* <a href="#" class="list-group-item list-group-item-action active" aria-current="true" id="$message['id']">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">$message['name']</h5>
              <small>$message['timedate']</small>
            </div>
            <p class="mb-1">$message['message']</small>
          </a> */