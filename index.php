<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Technology web</title>

	<link rel="stylesheet" type="text/css" href="includes/css/style.css">
	<link rel="stylesheet" type="text/css" href="includes/css/footer.css">
	<link rel="stylesheet" type="text/css" href="includes/css/newslatter.css">
	<link rel="stylesheet" type="text/css" href="includes/css/header.css">
	<link rel="stylesheet" type="text/css" href="includes/css/ScrollToTop.css">
    <link rel="stylesheet" type="text/css" href="includes/css/animation.css">
    <link rel="stylesheet" type="text/css" href="includes/css/popup.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>
<body>

<?php include('includes/header.php'); ?>


<!--========Hero Section start========-->
<div class="slider">
        <!-- fade css -->
        <div class="myslide fade">
            <div class="txt">
                <h1>Life changing<br/>Diet.</h1>
                <p>Make a difference in your life with our<br>Diet Plan and Job Opportunity!</p>
                <div class="slide-btn">
                    <a href="">LET'S WORK</a>
                </div>
            </div>
            <img src="images/hero-02.jpg">
        </div>

        <div class="myslide fade">
            <div class="txt">
                <h1>Workout days are the<br>Best</h1>
                <p>Live mentally & physicaly healthier</p>
                <div class="slide-btn">
                    <a href="">LET'S WORK</a>
                </div>
            </div>
            <img src="images/hero-01.jpg">
        </div>
        
        <div class="myslide fade">
            <div class="txt">
                <h1>Healthy Foods are better</h1>
                <p>You are what you eat,<br> So don't be fast, cheap, easy, or fake</p>
                <div class="slide-btn">
                    <a href="">LET'S WORK</a>
                </div>
            </div>
            <img src="images/hero-03.jpg">
        </div>
        
        <div class="myslide fade">
            <div class="txt">
                <h1>Fresh with Greenary</h1>
                <p>Keep yourself calm, <br> We will help you to get there. <br> Hurry up and join us</p>
                <div class="slide-btn">
                    <a href="">LET'S WORK</a>
                </div>
            </div>
            <img src="images/hero-04.jpg">
        </div>
        
        <div class="myslide fade">
            <div class="txt">
                <h1>Meditation and Environment</h1>
                <p>Getting deep breaths in a soothing environment <br> Will make you feel you are a happy soul</p>
                <div class="slide-btn">
                    <a href="">LET'S WORK</a>
                </div>
            </div>
            <img src="images/hero-05.jpg">
        </div>
        <!-- /fade css -->
        
        <!-- onclick js -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
        <div class="dotsbox" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </div>
<!--========Hero Section End========-->


<!--========About us Section start========-->
<section class="Aboutus section-box row-spacing animation-div">
    <div class="left-col">
        <img src="images/body-about.jpg">
    </div>
    <div class="right-col">
        <p class="aboutus headline">About </p>
        <h1 class="h-tag">We inspire people to Healthy life.</h1>
        <p class="ph01 ph">We inspire people to active, fit & financialy balanced life by
        offering them business opportunity and.</p>
        <p class="ph02 ph">You can feel too-much relax when you have a side income-source.
        What can be more peaceful than earning extra cents while
        you’re home in this situation!
        We’ll give you that opportunity. be connected to get offered!</p>
        <button class="offered">
            <span>
                <a href="" style="color:white">Get Offered!</a>
            </span>
        </button>
    </div>
</section>
<!--========About us Section End========-->


<!--========Service Section start========-->
<section class="services row-spacing">
    <div class="headline-contant section-head animation-div">
    <p class="headline">Our Service</p>
    <h1 class="h-tag">Most popular services</h1>
    </div>
    <div class="services-imgs animation-div">
    <div class="sr-img">
        <div class="img-row1">
            <img src="images/service01.svg">
            <div class="img-on-txt">
            <h2>Fit & Hit</h2>
            <button class="services-btn" id="myBtn">
            <span>
                <a class="button" style="color:white">Know More</a>
            </span>
            </button>
            </div>
        </div>
        <div class="img-row2">
               <div class="">
                <img src="images/service02.svg">
                <div class="img-on-txt">
                    <h2>Healthy Meals</h2>
                    <button class="services-btn" id="myBtn1">
                    <span>
                    <a class="button" style="color:white">Know More</a>
                    </span>
                    </button>
                </div>
               </div>
               <div class="img3-content">
                <img class="img2" src="images/service02.svg">
                <div class="img-on-txt">
                    <h2>Benefits</h2>
                    <button class="services-btn" id="myBtn2">
                    <span>
                    <a class="button" style="color:white">Know More</a>
                    </span>
                    </button>
                    </div>
               </div>
            </div>
    </div>
        <div class="sr-mobile sr-mobile-top">
            <ul>
                <li><a href="">Fit & Hit</li>
                <li><i class="fi fi-rr-arrow-right"></i></a></li>
            </ul>
                <img src="images/service02.svg" alt="">
        </div>
        <div class="sr-mobile">
            <ul>
                <li><a href="">Healthy Meals</li>
                <li><i class="fi fi-rr-arrow-right"></i></a></li>
            </ul>
                <img src="images/service02.svg" alt="">
        </div>
        <div class="sr-mobile">
            <ul>
                <li><a href="">Benefits</li>
                <li><i class="fi fi-rr-arrow-right"></i></a></li>
            </ul>
                <img src="images/service02.svg" alt="">
        </div>
    </div>

  <!-- The Modal 1 -->
  <div id="myModal" class="modal">
<!-- Modal content -->
<div class="modal-content">
<div class="close-icon-s">
  <span class="close">&times;</span>
</div>
<h3 class="modal-content-h">Fit & Hit</h3>
  <p class="modal-content-p">
  Are you tired of your unhealthy belly fats and want to get rid of it, but unwilling 
  to join gym? Don’t worry, I am here to assist you in lowering your stubborn visceral 
  fats. It is unrealistic and unhealthy claim that only certain diet plans are effective 
  in burning your bad fat. Similarly, only exercise can help to tone your stomach a bit, 
  but still you need to reduce your whole body fats in order to reduce your stomach fat. 
  So, you have to consider both exercise and diet to get best results. Now your task is 
  to keep a balance of training, diet and stress. Here we are going to discuss the types 
  of belly fats, its causes, important diet and some exercises which were found much 
  effective in achieving a flat belly.
  </p>
</div>
</div>


<div id="myModal1" class="modal">
<!-- Modal content 2 -->
<div class="modal-content">
<div class="close-icon-s">
  <span class="close close1">&times;</span>
</div>
<h3 class="modal-content-h">Healthy Meals</h3>
  <p class="modal-content-p">
  Try something active outside- a walk/run, ice skating on Occom, cross-country 
  skiingStand instead of sitting when doing work. Try a different random act of 
  kindness each day. Add at least one vegetable or fruit to every meal. Limit 
  the number of alcoholic beverages you consume- either count your drinks or 
  set a drink limit. Do something kind for a friend each day- leave a note of 
  encouragement for your roommate, bring a treat to your friend in the library, 
  write a letter to an old friend.
  </p>
</div>
</div>

<div id="myModal2" class="modal">
<!-- Modal content 3 -->
<div class="modal-content">
<div class="close-icon-s">
  <span class="close close2">&times;</span>
</div>
<h3 class="modal-content-h">Benefits</h3>
  <p class="modal-content-p">
  A healthy diet may help to prevent certain long-term (chronic) diseases such as heart 
  disease, stroke and diabetes. It may also help to reduce your risk of developing 
  some cancers and help you to keep a healthy weight. This leaflet explains the 
  principles of a healthy diet. It is general advice for most people. The advice may 
  be different for certain groups of people, including pregnant women, people with 
  certain health problems or those with special dietary requirements.
  </p>
</div>
</div>

</section>
<!--========Service Section End========-->


<!--========Opportunity Section start========-->
<section class="Aboutus section-box row-spacing animation-div Opportunity-ss">
    <div class="left-col">
        <img src="images/Opportunity.png">
    </div>
    <div class="right-col">
        <p class="aboutus headline">Opportunity</p>
        <h1 class="h-tag">We inspire people to Earn Money.</h1>
        <p class="ph01 ph">Everyone wanna earn money in the most relaxed way.
                    We have many opportunities handpicked just for you, so that you can earn money while you’re at home.</p>
        <p class="ph02 ph">What you have to do is just fill out our contact form & wait,
                    We’ll contact you in no time with huge opportunities.
                    This could be the opportunity you've been waiting for!</p>
        <button class="offered">
            <span>
                <a href="" style="color:white">Get Offered!</a>
            </span>
        </button>
    </div>
</section>
<!--========Opportunity Section End========-->


<!--========Wonder us Section start========-->
<section class="wonder section-box row-spacing-wo animation-div">
    <div class="left-col">
        <img src="images/wonder.svg" width="472px" height="484.75px">
    </div>
    <div class="right-col-wo">
        <p class="wonder-women headline">Wonder Women</p>
        <h1 class="h-tag">We inspire ‘Women on a Mission’</h1>
        <p class="ph01 ph">SUPER GREAT CONCEPT for women who want change in their
            lives and want to be their own boss or anyone who just wants to
        be a part of something positive are more than welcome.</p>
        <p class="ph02 wonder-ph">Every Wednesday evening at 9pm we offer the opportunity to be part of something great!</p>
        <button class="offered">
            <span>
            <a href="" style="color:white">Fill Form</a>
            </span>
        </button>
    </div>
</section>
<!--========Wonder us Section End========-->


<!--========video Section start========-->
<section class="video section-box-ve row-spacing-video">
    <div class="video-content animation-div">
        <h1 class="h-tag video-header">We inspire people to Understand us.</h1>
        <p class="ph01 ph video-ph">Not yet sure about what we do here? This short video will break<br>your confusion, and will lead you to a ‘Door of Opportunity’!</p>
    </div>
        <div class="video-top animation-div">
        <iframe width="854" height="480" src="https://www.youtube.com/embed/KD-FmeueFUo?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </iframe>
        </div>
</section>
<!--========video Section End========-->


<!--========Freeble Section start========-->
    <div class="section-head freeble freeble-head animation-div">
         <p class="freeble headline">Freeble</p>
        <h1 class="h-tag">Download our freebies</h1>
    </div>
<section class="freeble section-box row-spacing-free animation-div">
    <div class="left-col">
        <img src="images/download.png" width="472px" height="484.75px">
    </div>
    <div class="frreble-right-col">
        <h2>Get our free Magazine</h2>
        <ul>
                    <li>Do you want to eat healthier?</li>
                    <li>Do you want a lifestyle where you are bursting with energy?</li>
                    <li>Do you want tips about a more active life?</li>
                    <li>Do you want a weight-loss pain free life?</li>
                    <li>Do you want a routine for staying refreshed?</li>
                </ul>
            <h3>Then this book is the right fit for you.</h3>
            <button class="offered">
            <span>
            <a href="" style="color:white">Download</a>
            </span>
            </button>
    </div>
</section>
<!--========Freeble Section End========-->


<!--========Blog Section Start========-->
<div class="section-head animation-div blog-head-anim">
         <p class="freeble headline">Blog</p>
        <h1 class="h-tag">Read our blog to be inspired!</h1>
    </div>
<section class="blog">
    <div class="blog-card blog-card-left animation-div">
        <img src="images/Blog/blog1.svg" alt="">
        <p class="topic">Fitness</p>
        <h2>Having ‘exhausted all day’ problem? Get solution.</h2>
        <p class="paragraph">You may be too exhausted even to mana ge your daily affairs. 
            In most cases, there's a reason for the fatigue. It might be allergic 
            rhinitis, anemia, depression, fibromyalgia, chronic kidney disease, liver 
            disease, lung disease (COPD), or some other health condition</p>
        <a href="">Read More</a>
    </div>
    <div class="blog-card blog-card-middle animation-div">
        <img src="images/Blog/blog2.svg" alt="">
        <p class="topic">Earning</p>
        <h2>Ways of earning cents while staying home in the ‘New Normal’.</h2>
        <p class="paragraph">You may be too exhausted even to mana ge your daily affairs. 
            In most cases, there's a reason for the fatigue. It might be allergic 
            rhinitis, anemia, depression, fibromyalgia, chronic kidney disease, liver 
            disease, lung disease (COPD), or some other health condition</p>
        <a href="">Read More</a>
    </div>
    <div class="blog-card blog-card-right animation-div">
        <img src="images/Blog/blog3.svg" alt="">
        <p class="topic">Fitness</p>
        <h2>Stay fit in lockdown with online workout.</h2>
        <p class="paragraph">You may be too exhausted even to mana ge your daily affairs. 
            In most cases, there's a reason for the fatigue. It might be allergic 
            rhinitis, anemia, depression, fibromyalgia, chronic kidney disease, liver 
            disease, lung disease (COPD), or some other health condition</p>
        <a href="">Read More</a>
    </div>
</section>
<!--========Blog Section End========-->


<!--========FAQ Section Start========-->
<section class="faq" id="home-faqs">
    <div class="section-head blog-head-anim animation-div">
        <p class="freeble headline">FAQ</p>
       <h1 class="h-tag">Felt those question like others?</h1>
   </div>
    <div class="accordion">
        <div class="accordion-item animation-div one">
            <div class="accordion-item-header">
                How the Job Offer works?
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    <p>You must fill the contact form with a valid an email address. Then we will send you the required details of getting a job offer. Don’t be late hurry up and contact us.
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion-item animation-div tow">
            <div class="accordion-item-header">
                What is Company Presentation?
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    <p>Company presentations are slideshows or demonstrations that provide potential clients and customers with beneficial information about a company's history and services.
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion-item animation-div three">
            <div class="accordion-item-header">
                What is Woman on a Mission?
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    <p>A person who is fiercely determined to do or get what they want. Janet stormed into work like a woman on a mission, heading straight into her boss's office to demand a raise in her salary.
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion-item animation-div foure">
            <div class="accordion-item-header">
                Am I gonna get Benefited or not?     
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    <p>The persons who join us with a sufficient details have got many benefits in improving their health habits and getting a better life under our guidance. Join with us you will never regret it.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========FAQ Section End========-->

<!--========Newslatter Section Start========-->
<section class="newslatter animation-div">
<div class="subscribe">
	<h2 class="subscribe__title">Subscribe to our Newsletter.</h2>
	<p class="subscribe__copy">Subscribe to keep up with fresh news and exciting updates. We promise not to spam you!</p>
	<div class="form">
        <form method="POST" action="includes/php/subscribe.php">
		<input type="email" name="email" class="form__email" placeholder="Enter your email address" />
		<button class="form__button" type="submit">Subscribe</button>
        </form>
	</div>
</div>
</section>
<!--========Newslatter Section End========-->

<!--========FooterSection Start========-->
<?php include('includes/footer.php'); ?>
<!--========FooterSection End========-->


<?php include('includes/ScrollToTop.php'); ?>


<!--========Script========-->
<script src="includes/js/script.js"></script>
<script src="includes/js/accordion.js"></script>
<script src="includes/js/animation.js"></script>
<script src="includes/js/fill-form.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>