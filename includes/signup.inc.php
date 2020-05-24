<?php
if (isset($_POST['signup-submit'])){
    require 'db.php';

    $username = $_POST['uid'];
    $mailuid = $_POST['mailuid'];
    $pwd = $_POST['pwd'];
    $repwd = $_POST['re-pwd'];

    if(empty($username) || empty($mailuid) || empty($pwd) || empty($repwd)){
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$mailuid);
        exit();
    }
    else if(!filter_var($mailuid, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../signup.php?error=invaliduid&mail");
        exit();
    }
    else if(!filter_var($mailuid, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../signup.php?error=invaliduid&mail=".$mailuid);
        exit();
    }
    else if($pwd !== $repwd){
        header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$mailuid);
        exit();
    }
    else{
        $cmd = "SELECT username FROM users WHERE username=? OR email=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $cmd)){
            header("Location: ../signup.php?error=sqlerror&uid");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $mailuid);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) > 0){
                header("Location: ../signup.php?error=nametaken&uid=".$username."&mail=".$mailuid);
                exit();
            }
            else{
                $cmd = "INSERT INTO users(username, email, password) VALUES (?, ?, ?)";
                if(!mysqli_stmt_prepare($stmt, $cmd)){
                    header("Location: ../signup.php?error=sqlerror&uid=".$username."&mail=".$mailuid);
                    exit();
                }
                else{
                    $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $mailuid, $hashPwd);
                    mysqli_stmt_execute($stmt);

                    //here to login user after sign up
                    $cmd = "SELECT user_id FROM users WHERE username=?";
                    mysqli_stmt_prepare($stmt, $cmd);
                    mysqli_stmt_bind_param($stmt, "s", $username);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    $row = mysqli_fetch_assoc($result);

                    //start session
                    session_start();
                    $_SESSION['id'] = $row['user_id'];
                    $_SESSION['name'] = $row['username'];
                    header("Location: ../");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: ../signup.php");
    exit();
}