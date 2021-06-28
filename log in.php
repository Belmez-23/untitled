<?php
session_start();
require "userclass.php";
try {
    // Get email address from request body
    $email = filter_input(INPUT_POST, 'email');

    // Get password from request body
    $password = filter_input(INPUT_POST, 'password');

    // Find account with email address
    $user = new MyClass\User();
    $user->findByEmail($email);

    // Verify password with account password hash
    if (password_verify($password, $user->password_hash) === false) {
        throw new Exception('Invalid password');
    }

    $currentHashAlgorithm = PASSWORD_DEFAULT;
    $currentHashOptions = array('cost' => 15);
    $passwordNeedsRehash = password_needs_rehash(
        $user->password_hash,
        $currentHashAlgorithm,
        $currentHashOptions
    );
    if ($passwordNeedsRehash === true) {
        // Save new password hash
        $user->password_hash = password_hash(
            $password,
            $currentHashAlgorithm,
            $currentHashOptions
        );
        $user->saveHash();
    }

    // login status
    $_SESSION['user_logged_in'] = 'yes';
    $_SESSION['user_email'] = $email;

    // Redirect to profile page
    echo "Вход выполнен. Пользователь: ".$email;
    //header('HTTP/1.1 302 Redirect');
    //header('Location: /user-profile.php');
} catch (Exception $e) {
    header('HTTP/1.1 401 Unauthorized');
    echo $e->getMessage();
}