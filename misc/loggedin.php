<?php

    if(empty($_SESSION['user_id'])) {
        if(!empty($_COOKIE['bcp_user'])) {
            $_SESSION['user_id'] = $_COOKIE['bcp_user'];
        }
        else {
            header('Location: '.url('cms/login.php'));
        }
    }