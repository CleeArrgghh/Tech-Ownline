<?php
require_once "class_autoloader.php";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $repeatPwd = $_POST["repeat_pwd"];
    $email = $_POST["email"];

    $signup = new SignupContr($username, $pwd, $repeatPwd, $email);

    // Running error handlers and user signup 
    if ($signup->createUser()) {
        header("location: ../signup.php?signup=success");
        exit();
    } else {
        header("location: ../signup.php?error=some_error_message");
        exit();
    }
} else {
    header("location: ../signup.php");
    exit();
}
