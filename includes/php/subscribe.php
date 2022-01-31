<?php
if(isset($_POST['submit'])) {
    
$servername = "localhost";
$username = "root";
$password = "365";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    $email = mysqli_real_escape_string($conn, $_POST['email']);
 
    $sql = "INSERT INTO NewsLetter (name) VALUES ('$email')";

    $result = mysqli_query($conn,$sql);

    if(!$result) {
        die('could not post date!' . mysqli_connect_error());
        } else {
            header('Location: index.php?Thank you for subscribing us!');
            exit();
        }
}
?> 
