<?php 
// server page, connecting to database

session_start(); // session stores info, variables, across several pages

include('config.php');
// header include eventually goes here

//connect to database
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

// register user
// if (isset reg_user)
if (isset($_POST['reg_user'])) {
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

    // end user must fill everything out, if empty, new function array_push()
    if (empty($first_name)) {
        array_push($errors, 'First Name is required');
    }

    if (empty($last_name)) {
        array_push($errors, 'Last Name is required');
    }

    if (empty($email)) {
        array_push($errors, 'Email is required');
    }

    if (empty($username)) {
        array_push($errors, 'Username is required');
    }

    if (empty($password_1)) {
        array_push($errors, 'Password is required');
    }

    if ($password_1 !== $password_2) {
        array_push($errors, 'Passwords do not match');
    }

    // checking username/password, selecting from table
    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 "; 

    $result = mysqli_query($iConn, $user_check_query)
    or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

    $rows = mysqli_fetch_assoc($result);

    if ($rows) {
        if($rows['username'] == $username) {
            array_push($errors, 'Username already exists');
        }
        
        if($rows['email'] == $email) {
            array_push($errors, 'Email already exists');
        }
    } // close big rows

    // if no errors
    if (count($errors) < 1) {
        // new function md5() will create 32 hex char val for password in database
        $password = md5($password_1);

        // insert registration data into table inside database using INSERT
        $query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

        mysqli_query($iConn, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = $success;

        header('Location:login.php');
    } // end count
} // end if isset reg_user

// now communicate to login.php

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    if (empty($username)) {
        array_push($errors, 'Username is required');
    }
    
    if (empty($password)) {
        array_push($errors, 'Password is required');
    }

    // count errors, all good if zero
    if (count($errors) == 0) {
        $password = md5($password);
        
        // make sure only one username/password, SELECT info from table
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        $results = mysqli_query($iConn, $query);
    

        // if username/password equal to one, all good
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;
            
            // if successful, directed to index.php
            header('Location:index.php');
        } else {
            array_push($errors, 'Wrong username/password combo');
        }
    }
} // end isset log in