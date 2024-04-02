<?php

session_start();
include '../core/functions.php';
include '../core/sessions.php';
include '../core/validations.php';
include '../database/helpers/messageFunctions.php';
$errors = [];
$success = [];

if (checkRequestMethod("POST")) {
    foreach ($_POST as $key => $value) {
        $$key = sanitizeInput($value);
    }

    // Validation For Name : Required 
    if (requiredVal($name)) {
        $errors['name'] =  "Name is reqired";
    } elseif (minLength($name, 3)) {
        $errors['name'] = "Name Must Be More Than  3 Letters";
    } elseif (maxLength($name, 30)) {
        $errors['name'] = "Name Must Be Less Than  30 Letters";
    }

    // Validation For Email : Required , email
    if (requiredVal($email)) {
        $errors['email'] =  "Email is reqired";
    } elseif (emailVal($email)) {
        $errors['email'] = "Enter Vaild Email";
    }

    // Validation For Phone : Required 
    if (requiredVal($phone)) {
        $errors['phone'] =  "Phone is reqired";
    }

    // Validation For Message : Required 
    if (requiredVal($message)) {
        $errors['message'] =  "Phone is reqired";
    } elseif (minLength($message, 10)) {
        $errors['message'] = "Message Must Be More Than  10 Letters";
    } elseif (maxLength($message, 30)) {
        $errors['message'] = "Message Must Be Less Than  30 Letters";
    }

    if (empty($errors)) {
        createMessage($name, $email, $phone, $message);
        $success['success'] = "Message Send Successfully ";
        sessionStore('success', $success);
        redirectPath('../contact.php');
    } else {
        sessionStore('errors', $errors);
        redirectPath('../contact.php');
    }
} else {
    echo "Not Allowed Request Method";
}
