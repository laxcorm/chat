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
    }

$quer = "SELECT table_name FROM information_schema.tables WHERE table_schema = 'test' and table_name LIKE '${id}_%'";
            // var_dump($query);
           
           $tables_res = $mysqli->query($quer);
           var_dump($mysqli);
            $tables = $tables_res->fetch_all(); 
            echo "<br><br>";
            var_dump($tables);

            //  $tables = $tables_res->fetch_all(MYSQLI_ASSOC);

            //require("pages/html_page_chat.php");
}
 elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    require("pages/html_page_login.php");
}