<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 'On'); 
require('mysqli.php');

// if ($_SESSION['user']['id'] ?? false) {
//     require('base.php');
// } 

if ($_SERVER['REQUEST_URI'] == '/signup') {
    require('registration.php');
} elseif ($_SERVER['REQUEST_URI'] == '/logout') {
    require('logout.php');
} elseif ($_SERVER['REQUEST_URI'] == '/login') {
    require('login.php');
} 
// elseif (stripos($_SERVER['REQUEST_URI'], "\/chat\/")) {
//     $_SESSION['current_chat'] = substr($_SERVER['REQUEST_URI'], 6);
// } 
else {
    require('pages/html_page_login.php');
}
