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
    <?php include 'includes/header.php'; ?>

    <!-- Login form here -->
    <div class="container content d-flex justify-content-center col-lg-3 col-md-6 col-sm-10">
        <form class="acc_field" action="includes/login.inc.php" method="post">
            <h2 class="text-center">Login</h2>
            <?php 
            if(isset($_GET["error"])){
                echo "<p id='error-msg'>Email not registered or wrong password</p>";
            }
            ?>
            <div class="form-group">
                <label for="mailuid">Email address</label>
                <input type="text" class="form-control" name="mailuid" placeholder="Email address" require>
            </div>
            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" class="form-control" name="pwd" placeholder="Password" require>
            </div>
            <button name="login-submit" type="submit" class="btn btn-primary">Login</button>
            <ul class="links">
                <li><a class="acc-link" href="signup.php">Forgot password?</a></li>
                <li><a class="acc-link" href="signup.php">Create an account</a></li>
            </ul>
        </form>
        
    </div>

    <?php include 'includes/bar_anim.php';?>
    
</body>
</html>