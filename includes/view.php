<?php
$sql = "SELECT subject, truth FROM posts ORDER BY RAND() LIMIT 1;";
$result = mysqli_query($conn, $sql);
if($result){
    $data = mysqli_fetch_array($result); 
    ?>
    <div class="content align-middle" id="subject">
    <?php echo $data['subject'];?>
    </div>
    <div class="content align-middle" id="truth">
    <?php echo $data['truth'];?>
    </div>

<?php } ?>

