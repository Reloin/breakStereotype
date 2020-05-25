<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Break Stereotype</title>

    <!--CSS placed here-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/post.css">

    <!--sweetAlert cdn -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!--Bootstrap here-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</head>
<body>
    <?php
    if(isset($_GET['post'])){
        echo '<script type="text/javascript"> Swal.fire("Posted to community"); </script>';
    }
    elseif(isset($_GET["error"])){
        if($_GET["error"]== "emptyfield"){
            echo '<script type="text/javascript"> Swal.fire("Please fill in both fields"); </script>';
        }
    }
    ?>
    <?php include 'includes/header.php';?>
    <div class="text-center container col-lg-6 col-md-9 col-sm-10">
        <form class="content" action="includes/post.inc.php" method="post">
            <textarea type="text" name="subject" maxlength="280" placeholder="People thought that ..." require></textarea>
            <br>
            <textarea type="text" name="truth" maxlength="280" placeholder="In actual truth ..." require></textarea>
            <br>
            <button class="btn btn-info sub-btn" name="submit-post" type="submit">Submit</button>
        </form>
    </div>
    
    <?php include 'includes/bubble_anim.php';?>
</body>
</html>