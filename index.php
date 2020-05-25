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

    <!--sweetAlert cdn -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!--Bootstrap here-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    
</head>
<body>
<?php
    if(isset($_GET['login'])){
        echo '<script type="text/javascript"> Swal.fire("Successfully logged in"); </script>';
    }
    elseif(isset($_GET['signup'])){
        echo '<script type="text/javascript"> Swal.fire("Successfully Registered"); </script>';
    }
    ?>
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