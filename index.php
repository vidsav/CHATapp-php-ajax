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
    <br>
    <div id="container">
        <div id="chat_box">
            <div id="chat_data">
                <span style="color:#007bff;">Wali: </span>
                <span>How are you ?</span>
                <small style="float:right">12:30 PM</small>
            </div>
        </div>
        <form method="post"; action="">
            <div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Name">
  </div>
            <div class="form-group">
            <textarea class="form-control" name="enter message" placeholder="enter message"></textarea>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Send">
        </form>
    </div>
</body>

</html>