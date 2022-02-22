<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="includes/css/contact.css" >
    <link rel="stylesheet" type="text/css" href="includes/css/footer.css">
    <link rel="stylesheet" type="text/css" href="includes/css/ScrollToTop.css">
    <link rel="stylesheet" type="text/css" href="includes/css/header.css">
    <link rel='stylesheet' href='https://cdn-unicons.flatiocon.com/unicons-regular-rounded/css/unicons-regular-rounded.css'>
    <script src="http://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous">
        </script>

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>


    <script src="http://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>


</head>
<body>


<?php include('includes/header.php'); ?>



<!--- contact us ---->



<div class="header">
<h1>We're here for you!</h1>
</div>


<div class="contact-A">
<h3>contact us</h3>
<p>Any question or remarks? Just write us a message!</p>
</div>


<section class="contact-main">
    <div class="contact-left">
    <h2>Contact information</h2>
      <div class="contact-left-address">
        
        <ul>
           <li><i class="fa fa-phone"></i> +940115445000</li>
           <li><i class="fa fa-envelope"></i> inquiries@nsbm.ac.lk</li>
           <li><i class="fa fa-home"></i> NSBM Homagama</li>
        </ul>
      </div>

      <div class="contact-left-icons">
        <ul>
            <li><i class="fa fa-twitter"></i></li>
            <li><i class="fa fa-linkedin"></i></li>
            <li><i class="fa fa-youtube"></i></li>
            <li><i class="fa fa-whatsapp"></i></li>
        </ul>
      </div>
    </div>    

    <div class="contact information contact-form">
        <div class="contact-right-content">
            <form action="" method="POST">
                <label for="name">Name</label>
                <input type="text" placeholder="Enter your name.." required>

                <label for="email-1">Email</label>
                <input type="email" placeholder="Enter email address..." required>

                <label for="massage">Your message</label>
                <textarea rows="5" id="subject" name="subject" placeholder="Write something.."></textarea>

                <button type="submit" class="hero-btn green-btn">subscribe</button>
            </form>
        </div>
    </div>
</section>
    

<section class="location">
<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126756.16788528483!2d79.88001548928219!3d6.8749941973527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ae2523b05555555%3A0x546c34cd99f6f488!2snsbm%20green%20university!3m2!1d6.8213291!2d80.04157289999999!4m5!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!3m2!1d6.9270786!2d79.861243!5e0!3m2!1sen!2slk!4v1644333372057!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<?php include('includes/footer.php'); ?>
<?php include('includes/ScrollToTop.php'); ?>

</body>
</html>
