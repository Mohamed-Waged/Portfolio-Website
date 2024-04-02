<?php

session_start();
include '../core/functions.php';
include '../core/sessions.php';
include '../core/validations.php';
include '../database/helpers/projectFunctions.php';

$errors = [];
$success = [];

if (checkRequestMethod("POST")) {
    $name = sanitizeInput($_POST['name']);
    $description = $_POST['description'];
    $file = $_FILES['image'];
    $file_name = $file['name'];
    $file_type = $file['type'];
    $file_tmp_name = $file['tmp_name'];
    $file_error = $file['error'];
    $file_size = $file['size'];

    // Validation For Name : Required 
    if (requiredVal($name)) {
        $errors['name'] =  "Name is reqired";
    } elseif (minLength($name, 3)) {
        $errors['name'] = "Name Must Be More Than  3 Letters";
    } elseif (maxLength($name, 30)) {
        $errors['name'] = "Name Must Be Less Than  30 Letters";
    }

    // Validation For Description : Required 
    if (requiredVal($description)) {
        $errors['description'] =  "Description is reqired";
    } elseif (minLength($description, 10)) {
        $errors['description'] = "Description Must Be More Than  10 Letters";
    } elseif (maxLength($description, 30)) {
        $errors['description'] = "Description Must Be Less Than  30 Letters";
    }

    if (!empty($file_name)) {
        $ext = pathinfo($file_name);
        $original_name = $ext['filename'];
        $original_ext = $ext['extension'];
        $allowed = array("png", "jpg", "jpeg", "gif");
        if (in_array($original_ext, $allowed)) {
            if ($file_error === 0) {
                if ($file_size < 100000) {

                    $destnotion = "../assets/" . $original_name . "." . $original_ext;
                    move_uploaded_file($file_tmp_name, $destnotion);

                    $success['success'] = "Project Added Successfully ";
                    sessionStore('success', $success);


                    // echo "KOL 7AGA TMAM";
                } else {
                    $errors['image'] = "Your File Is To Big";
                }
            } else {
                $errors['image'] = "Your Have An Error";
            }
        } else {
            $errors['image'] = "Your File Not Allowed";
        }
    } else {
        $errors['image'] = "Please Choose Image";
    }


    if (empty($errors)) {
        sessionStore('success', $success);
        createProject($name, $description, $file_name);
        redirectPath('../create.php');
    } else {
        sessionStore('errors', $errors);
        redirectPath('../create.php');
    }
} else {
    echo "Not Allowed Request Method";
}
