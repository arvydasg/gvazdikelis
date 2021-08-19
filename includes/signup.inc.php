<?php

// did the user actually go inside the website throught the sign up form
// or he just did /includes.signup... 

/// later we are trying to catch any sort of errors that users of we might have made
/// through functions

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // lets see if the user left any inputs empty
    // !== false - not equal to false 
    // if its anything besides false - then throw an error
    // big difference between true and not equal to false 

    // can also add more error handlers.
    // for example check if the password is longer than 6 characters or smth


    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidUid($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    // if we got to this point, the user made no mistakes, let sign user to our website

    createUser($conn, $name, $email, $username, $pwd);

}
// exit - stop the script if anything happens here.
else {
    header("location: ../signup.php");
    exit();
}