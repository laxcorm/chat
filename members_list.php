<?php
require('mysqli.php');


if (trim($_GET['login'])!='') {

    $login  =$_GET['login'];
    $query = "SELECT id, login FROM logins WHERE login LIKE '$login%'";//или logins

    $result = $mysqli->query($query);

    $logins = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($logins);
} else {
    exit();
}
