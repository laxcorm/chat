<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];


    $query = "SELECT id,password FROM logins WHERE login = ?";

    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('s', $login);
    if ($stmt->execute()) {
        $stmt->bind_result($id, $pass);
        $stmt->fetch();
        $stmt->close();
        if (password_verify($password, $pass)) {
            session_start();

            $_SESSION['user']['id'] = $id;
            $_SESSION['user']['login'] = $login;

            $quer = "SELECT table_name FROM information_schema.tables WHERE table_schema = 'chat' and table_name LIKE '${id}_%'";

            $tables_res = $mysqli->query($quer);

            $tables = $tables_res->fetch_all();
            $chats = [];
            foreach ($tables as $table) {

                $chats[] = $table[0];
            }
            $_SESSION['chats'] = $chats;
       
            require("pages/html_page_chat.php");
        } else {
            $errors[] = "Login or password is not correct";
            require("pages/html_page_login.php");
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    require("pages/html_page_login.php");
}

/* if (!$result = $mysqli->query($query)) {
    $error = "Please repeat";
    require("html_page_login.php");
} else {


    session_start();
    $row = $result->fetch_assoc()['id']; //проверить
    $_SESSION['id'] = $row['id'];
    $login = $row['login'];
    require("html_page_chat.php");
} */


/* $row = $result->fetch_assoc();
if (password_verify($password, $row['password'])) {
    $_SESSION['id'] = $row['id'];
    require("html_page_chat.php");
} */
