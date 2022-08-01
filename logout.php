<?php
session_start();
//Очистить данные сессии для текущего сценария
$_SESSION = [];
// Удалить cookie, соответствующую SID
unset($_COOKIE[session_name()]); //@
// Уничтожить хранилище сессии
session_destroy();

require('pages/html_page_login.php');
