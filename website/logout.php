<?php

session_start();
include 'core/functions.php';
include 'core/sessions.php';

// session_destroy();
sessionRemove('admin');
// print_r($_SESSION);
redirectPath("login.php");
