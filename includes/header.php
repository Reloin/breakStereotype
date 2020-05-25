<?php 
session_start();
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- navbar goes here -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="/">
        <h1 class="title">Break Stereotype</h1>
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