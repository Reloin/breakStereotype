<?php
if(isset($_POST["login-submit"])){
    require 'db.php';

    $mailuid = $_POST['mailuid'];
    $pwd = $_POST['pwd'];

    if(empty($mailuid) || empty($pwd)){
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else{
        $cmd = "SELECT * FROM users WHERE email=? OR username=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $cmd)){
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, 'ss', $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($pwd, $row['password']);
                if(!$pwdCheck){
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }//successfully login here
                else if($pwdCheck){
                    session_start();
                    $_SESSION['id'] = $row['user_id'];
                    $_SESSION['name'] = $row['username'];

                    header("Location: ../post.php");
                    exit();
                }
                else{
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
            }
            else{
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
}
else{
    header("Location: ../login.php");
    exit();
}