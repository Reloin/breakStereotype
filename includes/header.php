<?php 
session_start();
?>
<!-- navbar goes here -->
<div class="navbar navbar-dark container-fluid">
    <a class="navbar-brand" href="/">
        <h1 class="title">Break Stereotype</h1>
    </a>
    <?php 
        if(isset($_SESSION['id'])){
            echo '<a class="nav-btn btn btn-outline-light" href="post.php" role="button">Post</a>';
            echo '<a class="nav-btn btn btn-outline-dark" href="includes/logout.inc.php" role="button">Logout</a>';
        }
        else{
            echo '<a class="nav-btn btn btn-outline-light" href="login.php" role="button">Post</a>';
        }
    ?>
    
</div>