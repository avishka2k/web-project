<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="../css/thanks.css">
    <title>Document</title>
</head>
<body>
    
<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

    include 'config.php';

    function validate($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $message = validate($_POST['message']);


    if(empty($name) || empty($email) || empty($message)) {
      header("Location: index.php");
        } else {
            $sql = "insert into contact-form(name, email, message) values('$name','$email','$message')";
            $res = mysqli_query($conn, $sql);

            if($res) {
              echo "";
            } else {
               echo "Your message could not be sent!";
            }
          }
} else {
  header("Location: index.php");
}

?> 

<div class="thanks">
        <div class="thanks-contant">
            <h1>Thank you!</h1>
            <p>Thanks for subscribing to our news latter.
                you should receive a confirmation email soon
            </p>
            <div class="thanks-to-home-btn"><a class="btn" href="../../index.php">Go Home</a>
            </div>
        </div>
        <div class="not-receved-mail">
            <p>Email not recived? <a href="">Click here to send again</a></p>
        </div>
    </div>
</body>
</html>