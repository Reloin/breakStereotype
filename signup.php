<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Break Stereotype</title>

    <!--CSS placed here-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bar_anim.css">
    <link rel="stylesheet" href="css/login.css">

    <!--Bootstrap here-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'includes/header.php';?>

    <!-- Login form here -->
    <div class="container content d-flex justify-content-center col-6" style="margin-top: 23vh;">
        
        <form class="login_field" action="includes/signup.inc.php" method="post">
        <h2 class="text-center">Sign up</h2>
            <div class="form-group">
                <label for="mailuid">Username</label>
                <input type="text" class="form-control" name="uid" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="mailuid">Email address</label>
                <input type="email" class="form-control" name="mailuid" placeholder="Email address">
            </div>
            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" class="form-control" name="pwd" placeholder="Password">
                <input type="password" class="form-control" name="re-pwd" placeholder="Re-enter Password">
            </div>
            <button name="signup-submit" type="submit" class="btn btn-primary">Sign up</button>
        </form>
    </div>
    
    <!--Background component -->
    <div class="anim_bg">
        <ul class="box_anim">
            <li></li><li></li><li></li><li></li><li></li><li></li><li></li>
        </ul>
    </div>
</body>
</html>