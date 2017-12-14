<?php include('db.php'); ?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Chatapp</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <script>
            function ajax() {
                var req = new XMLHttpRequest();

                req.onreadystatechange = function () {
                    if (req.readyState == 4 && req.status == 200) {
                        document.getElementById('chat').innerHTML = req.responseText;
                    }
                }

                req.open('GET', 'chat.php', true);
                req.send();
            }
            setInterval(function () {
                ajax()
            }, 1000);
        </script>
        <style>
            * {
                padding: 0;
                margin: 0;
                border: 0;
            }
            
            body {
                background: url(bg.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            
            h1 {
                text-align: center;
                color: #fff;
            }
            
            #container {
                width: 40%;
                height: 500px;
                background: white;
                margin: 0 auto;
                padding: 20px;
                border-radius: 3px;
                overflow-y: scroll;
            }
            
            #chat_box {
                width: 90%;
                height: 400px;
            }
            
            #chat_data {
                width: 100%;
                padding: 5px;
                margin-bottom: 5px;
                border-bottom: 1px solid silver;
                
            }
            
            .wrapper {
                position: relative;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                width: 40%;
                height: 30%;
                margin: auto;
            }
            
            input[type='text'] {
                width: 100%;
                height: 40px;
                border: 1px solid gray;
                border-radius: 5px;
            }
            
            input[type='submit'] {
                width: 100%;
                height: 40px;
                border: 1px solid gray;
                border-radius: 5px;
            }
            
            textarea {
                width: 100%;
                height: 70px;
                border: 1px solid gray;
                border-radius: 5px;
            }
        </style>
    </head>

    <body onload="ajax();">
        <br>
        <h1>CHATapp</h1>
        <br>
        <div id="container">
            <div id="chat_box">
                <div id="chat"></div>
            </div>
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
        <br>
        <div class="wrapper">
            <form method="post" ; action="">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="msg" placeholder="Enter message"></textarea>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Send">
            </form>
        </div>
    </body>

    </html>