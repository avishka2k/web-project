
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



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Technology web</title>

	<link rel="stylesheet" type="text/css" href="includes/css/style.css">
	<link rel="stylesheet" type="text/css" href="includes/css/footer.css">
	<link rel="stylesheet" type="text/css" href="includes/css/socialIcon.css">
</head>
<body>
<?php include('header.php'); ?>
<p><?php if(isset($_POST['submit'])){  echo $msg; } ?></p>

    <!--====== Hero part Start =====-->


    <!--====== Hero part End =====-->

<?php include('footer.php'); ?>
</body>
</html>