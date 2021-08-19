<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result; // declaring it here so we dont have to repeat it in every if function?
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}



 // if the users username is not a proper username  then we want to throw an error message by saying result equal to true. 
 // creating a search algorith to match with the username that the user typed in
function invalidUid($username) {
    $result; 
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { // if ther is a mistake - ! means that 
        $result = true; // then it means there is a mistake
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($email) {
    $result; 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        $result = true; 
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result; 
    if ($pwd !== $pwdRepeat) { 
        $result = true; 
    }
    else {
        $result = false;
    }
    return $result;
}



// first thing we need to do to check if the user exists in the database already
// we need to connect to the db and see if the username that was just submitted exits
// in the DB table that I made in the phpmyadmin

// we dont want blindly to send the user input into our database, that leaves space for 
// sql injections 
// preventing any code getting injected into the databse
function uidExists($conn, $username, $email) {
 $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
 $stmt = mysqli_stmt_init($conn); //initializing a new prepared statemetn. 1:10 explains about hacking part
 if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
    exit();
 }

 mysqli_stmt_bind_param($stmt, "ss", $username, $email ); // ss - two strings. bounding the user data to the actual statement, now executing
 mysqli_stmt_execute($stmt); // checking if the user already exists


// assoc - associative array

 $resultData = mysqli_stmt_get_result($stmt);

 if ($row = mysqli_fetch_assoc($resultData )) {
    return $row; // returning all the data from the database if this user exits inside the database
 }
 else {
     $result = false;
     return $result;
 }

 mysqli_stmt_close($stmt);

}




function createUser($conn, $name, $email, $username, $pwd) {
 $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
 $stmt = mysqli_stmt_init($conn); 
 if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
    exit();
 }
 //// hashing passsword wiht build in php funciton. this function is alwasy being updated, to the current hshing standards
 $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

 mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd); 
 mysqli_stmt_execute($stmt); 
 mysqli_stmt_close($stmt);
 header("location: ../signup.php?error=none");
 exit();
}