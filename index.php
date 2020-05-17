<?php
include_once 'includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Break Stereotype</title>

    <!--CSS placed here-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/index.css">

    <!--Bootstrap here-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar navbar-dark container-fluid">
        <a class="navbar-brand" href="/">
            <h1 class="title">Break Stereotype</h1>
        </a>
        <a class="btn btn-outline-light" href="#" role="button">Post</a>
    </div>
    
    <div class="container col-lg-6 text-center">
        <?php
        $sql = "  SELECT * FROM posts;";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row['subject'] . '<br>';
                echo $row['truth'];
            }
        }

        ?>
    </div>
    
    <div class="anim_bg">
        <ul class="box_anim">
            <li></li><li></li><li></li><li></li><li></li><li></li><li></li>
            <li></li><li></li><li></li><li></li><li></li><li></li><li></li>
        </ul>
    </div>
</body>
</html>