<?php
    require_once('connect.php');

    if (isset ($_POST['username'])) {
        $username = $db -> real_escape_string($_POST['username']);

        $check = $db -> query("SELECT username FROM users WHERE username='$username'");

        $check_num_rows = $check -> num_rows;

        if($check_num_rows>= 1)
            echo "Log in to already existing character?";
    }
?>