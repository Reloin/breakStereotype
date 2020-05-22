<?php
include 'includes/db.php';
$sql = "SELECT subject, truth FROM posts ORDER BY rand() LIMIT 1;";
$result = mysqli_query($conn, $sql);
if($result){
    $data = mysqli_fetch_array($result);
}
if(isset($_GET['next'])) { 
    $result = mysqli_query($conn, $sql);
    if($result){
        $data = mysqli_fetch_array($result);
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Break Stereotype</title>

    <!--CSS placed here-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">

    <!--Bootstrap here-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- posts goes here -->
    <form method="get" class="container-fluid">
    <div class="container text-center">
        <div class="content align-middle" id="subject">
        <?php echo $data['subject'];?>
        </div>
        <div class="content align-middle" id="truth">
        <?php echo $data['truth'];?>
        </div>
        <button type="submit" name="next" class="btn btn-danger text-center" id="next_post">Another</button>
    </div>
    </form>
    
    <!-- animation stuff here -->
    <?php include 'includes/bubble_anim.php';?>
</body>
</html>