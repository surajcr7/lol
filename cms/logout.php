<?php
    session_start();
    require "../misc/functions.php";
    require "../misc/loggedin.php";

    unset($_SESSION['user_id']);

    if(!empty($_COOKIE['bcp_user'])) {
        setcookie('bcp_user', null, time() - 60, '/');
    }

    header('Location: '.url('cms/login.php'));