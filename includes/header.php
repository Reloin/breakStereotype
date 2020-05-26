<?php 
session_start();
?>
<!-- navbar goes here -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="/">
        <h1 class="title">Prejude</h1>
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
    <ul class="navbar-nav ml-auto">
    <?php 
        if(isset($_SESSION['id'])){
            echo '<li class="nav-item"><a class="nav-btn btn btn-outline-light" href="post.php" role="button">Post</a></li>';
            echo '<li class="nav-item"><a class="nav-btn btn btn-outline-dark" href="includes/logout.inc.php" role="button">Logout</a></li>';
        }
        else{
            echo '<li class="nav-item"><a class="nav-btn btn btn-outline-light" href="login.php" role="button">Login to post</a></li>';
        }
    ?>
    </ul>

    </div>
</nav>