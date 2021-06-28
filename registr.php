<?php

try {

    // email
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if (!$email) {
        throw new Exception('Неправильно указана почта ');
    }

    // password
    $password = filter_input(INPUT_POST, 'password');

    if (!$password || mb_strlen($password) < 8) {
        throw new Exception('Пароль должен содержать минимум 8 символов');
    }

    // password hash
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    if ($passwordHash === false) {
        throw new Exception('Пароль не принят');
    }

    // Create user account
    //require "userclass.php";
    require_once "userclass.php";
    $user = new \MyClass\User();
    $user->email = $email;
    $user->password_hash = $passwordHash;

    $user->save();

} catch (Exception $e) {
    // Report error
    header('HTTP/1.1 400 Bad request');
    echo $e->getMessage();
}


