<?php
include('db.php');
$query = "SELECT * FROM chat ORDER BY id ASC";
$run = $con->query($query);
            
while($row = $run->fetch_array()) :
?>
    <div id="chat_data">
        <span style="color:#007bff;"><?php echo $row['name']; ?>:</span>
        <span style="color:#BFBFBF;"><?php echo $row['msg']; ?></span>
        <small style="float:right"><?php echo formatDate($row['date']); ?></small>
    </div>
<?php endwhile; ?>