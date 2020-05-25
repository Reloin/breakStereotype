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

    <!--jQuery cdn here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Bootstrap here-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    
    
</head>
<body>
    <?php include 'includes/header.php';?>
    <script src="js/signup.js"></script>
    <!-- Login form here -->
    <div class="container content d-flex justify-content-center col-lg-3 col-md-6 col-sm-10" style="margin-top: 20vh;">
        
        <form class="acc_field" action="includes/signup.inc.php" method="post">
            <h2 class="text-center">Sign up</h2>
            
            <?php 
            if(isset($_GET["error"])){
                switch($_GET["error"]){
                    case 'emptyfields':
                        echo "<p id='error-msg'>Please fill in all box</p>";
                        break;
                    case 'invaliduid&mail':
                        echo "<p id='error-msg'>Enter valid name and email</p>";
                        break;
                    case 'invalidmail':
                        echo "<p id='error-msg'>Enter valid email</p>";
                        break;
                    case 'invaliduid':
                        echo "<p id='error-msg'>Enter valid username</p>";
                        break;
                    case 'passwordcheck':
                        echo "<p id='error-msg'>Password are different</p>";
                        break;
                    case 'nametaken':
                        echo "<p id='error-msg'>Username or email taken</p>";
                        break;
                }
            }
            ?>
            <div class="form-group">
            <label for="mailuid">Username</label>
            <input type="text" class="form-control" name="uid" id="uid" placeholder="Username" minlength="4" onchange="checkUidLen()" require>
            <p class="advice" id="uid-notice">Use alphabet and number only</p>
            </div>
            <div class="form-group">
                <label for="mailuid">Email address</label>
                <input type="email" class="form-control" name="mailuid" placeholder="Email address" require>
                <p id="email-check"></p>
            </div>
            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" onchange="checkPwdLen()" require>
                <input type="password" class="form-control" name="re-pwd" id="re-pwd" onchange="verPwd()" placeholder="Re-enter Password" require>
                <p class="advice" id="pwd-check">Password must be longer than 6 character</p>
            </div>
            <button name="signup-submit" type="submit" class="btn btn-primary">Sign up</button>
            <a class="acc-link links" href="login.php">Already a member?</a>
        </form>
    </div>
    
    <!-- animation stuff here -->
    <?php include 'includes/bar_anim.php';?>
</body>
</html>