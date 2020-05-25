<?php
require "includes/db.php";
$sql = "SELECT COUNT(*) FROM posts;";
$result = mysqli_query($conn, $sql);
if($result){
    $data = mysqli_fetch_array($result);
    echo $data["COUNT(*)"];
}