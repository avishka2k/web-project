<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="includes/css/footer.css">
  	<link rel="stylesheet" type="text/css" href="includes/css/header.css">
    <link rel="stylesheet" type="text/css" href="includes/css/aboutus.css">
	<link rel="stylesheet" type="text/css" href="includes/css/ScrollToTop.css">
    <link rel="stylesheet" type="text/css" href="includes/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
   


  </head>
<body>

  <?php include('includes/header.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <section class="aboutus">
        <div class="aboutus-header">
            <div class="aboutus-header-h">
                <h1>
                    About Us
                </h1>
            </div>
        </div>


       </section>
       <div class="nav-div">
        <div class="nav-div-tab">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Who We Are</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">FAQ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Our Team</button>
        </li>
      </ul>
      </div>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">    
            <div class="tab-pane-home">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique hic distinctio
                 sapiente nobis maxime, inventore cumque nulla repellendus, impedit, fuga possimus itaque ad error dolor tempore nesciunt voluptatibus quaerat in.
            </div>
            <div class="tab-pane-image">
                <img src="images/about.svg" alt="">
            </div>
      
      </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">    
            <div class="tab-pane-profile">
            Lorem ipsum dolor sit amet consectetur 
          adipisicing elit. Expedita repellat nisi esse! Molestias beatae aut quidem vero eius exercitationem 
          inventore voluptates illum voluptate non? Atque enim laborum quae sit ducimus. Lorem ipsum dolor sit amet 
          consectetur adipisicing elit. Expedita repellat nisi esse! Molestias beatae aut quidem vero eius
           exercitationem inventore voluptates illum voluptate non? Atque enim laborum quae sit ducimus.
            </div>
            <div class="tab-pane-image">
                <img src="" alt="">
            </div>
      </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">   
            <div class="tab-pane-contact">
               
            </div>
            <div class="tab-pane-image">
                <img src="" alt="">
            </div>
      </div>
      </div>
      </div>
      
    </section>
    

    <?php include('includes/footer.php'); ?>
    <?php include('includes/ScrollToTop.php'); ?>   

</body>
</html>