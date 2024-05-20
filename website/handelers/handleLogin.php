<?php

session_start();
include '../core/functions.php';
include '../core/sessions.php';
include '../core/validations.php';
$errors = [];
$admin = "admin@admin.com";
$adminPassword = 123123;

if (checkRequestMethod("POST")) {
    foreach ($_POST as $key => $value) {
        $$key = sanitizeInput($value);
    }

    // Validation For Email : Required , email
    if (requiredVal($email)) {
        $errors['email'] =  "Email is reqired";
    } elseif (emailVal($email)) {
        $errors['email'] = "Enter Vaild Email";
    }

    // Validation For Password : Required , 6 < length < 12
    if (requiredVal($password)) {
        $errors['password'] =  "Password is reqired";
    } elseif (minLength($password, 6)) {
        $errors['password'] = "Password Must Be More Than  6 Letters";
    } elseif (maxLength($password, 12)) {
        $errors['password'] = "Password Must Be Less Than  12 Letters";
    }

    if (empty($errors)) {
        if ($email == $admin && $password == $adminPassword) {
            $_SESSION['admin'] = ['name' => 'admin'];
            redirectPath("../messages.php");
        } else {
            $errors[] = "Please Enter Correct Admin Email";
            sessionStore('errors', $errors);
            redirectPath("../login.php");
        }
    } else {
        sessionStore('errors', $errors);
        $user = ['email' => $email, 'password' => $password];
        sessionStore('user', $user);
        redirectPath("../login.php");
    }
} else {
    echo "Not Allowed Request Method";
}
