<?php

if(isset($_POST['email'])) {
    include 'config.php';

    function validate($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $email = validate($_POST['email']);


    if(empty($email)) {
      header("Location: index.php");
        } else {
            $sql = "insert into NewsLetter(email) values('$email')";
            $res = mysqli_query($conn, $sql);

            if($res) {
              echo "Your message was send successfully!";
            } else {
               echo "Your message could not be sent!";
            }
          }
} else {
  header("Location: index.php");
}

?> 



