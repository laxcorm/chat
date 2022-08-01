<?php
session_start();

if ($_POST['signup_login'] ?? false) {

    $password = $_POST['password'];
    $login = $_POST['signup_login'];

    $check = "SELECT login FROM logins WHERE login=?";

    $stmt = $mysqli->prepare($check);
  
    $stmt->bind_param('s', $login);
    $stmt->execute();
    //$stmt->bind_result($log);
    if ($stmt->fetch()) {

        echo "This login exists. Please try to use new one";
    } else {
        $stmt->close();
        $query = "INSERT INTO logins (login, password) VALUES (?,?)";
        $password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $mysqli->prepare($query);

        $stmt->bind_param('ss', $login, $password);

        if ($stmt->execute()) {
            $id = $stmt->insert_id;

            $_SESSION['user']['id'] = $id;
            $_SESSION['user']['login'] = $login;
            require("pages/html_page_chat.php");
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    require("pages/html_page_signup.php");
}




/* if(strlen($password)<8 ){
    $error[] = "Login length must be no longer than 10 digits and no shorter than 5 digits";
}

$query  = "SELECT FROM users WHERE login = $login";

if(strlen($login)>10 || strlen($login)<5){
    $error[] = "Login length must be no longer than 10 digits and no shorter than 5 digits";
}

$result = $mysqli -> query($query);

if($result->fetch_assoc()){
    $error[] = "Login $login has already been registered";
} */