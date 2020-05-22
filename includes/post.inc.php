<?php
session_start();
if(isset($_POST["submit-post"])){
    require "db.php";

    $subject = $_POST["subject"];
    $truth = $_POST["truth"];

    $cmd = "INSERT INTO posts(subject, truth, agree, disagree, author_id, time_posted) VALUES (?, ?, 0, 0, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $cmd)){
        header("Location: ../post.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "ssis", $subject, $truth, $_SESSION['id'], date('Y-m-d H:i:s'));
        mysqli_stmt_execute($stmt);
        header("Location: ../post.php");
        exit();
    }
}