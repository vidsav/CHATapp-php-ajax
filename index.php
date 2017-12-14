<?php include('db.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Chat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>CHAT</h1>
    <br>
    <div id="container">
        <div id="chat_box">
            <?php
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
        </div>
        <form method="post"; action="">
            <div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Name">
  </div>
            <div class="form-group">
            <textarea class="form-control" name="msg" placeholder="enter message"></textarea>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Send">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $msg = $_POST['msg'];
            $query = "INSERT INTO chat (name,msg) values ('$name','$msg')";
            $run = $db_connect->query($query);
            
            if($run){
                echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true' />";
            }
        }
        ?>
    </div>
</body>
<script src="chat.js"></script>
</html>