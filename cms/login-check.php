<?php

    session_start();
    require "../misc/functions.php";
    require "../misc/db.php";

    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $sql = "SELECT id FROM users WHERE email = '$email' AND password = '$password'";

    $result = $db->query($sql);
    
    if($result && $result->num_rows == 1) {
        $user = $result->fetch_assoc();

        $_SESSION['user_id'] = $user['id'];

        if(!empty($_POST['remember']) && $_POST['remember'] == 'yes') {
            setcookie('bcp_user', $user['id'], time() + 30 * 24 * 60 * 60, 
            '/');
        }

        header('Location: '.url('cms/dashboard.php'));
    }
    else {
        $_SESSION['message'] = [
            'content' => 'Incorrect email/password.',
            'type' => 'danger',
        ];

        header('Location: '.url('cms/login.php'));
    }