<header>
		<div class="navbar navbar-pager">
    <div class="container">
      <div class="logo" id="logo">
        <a href="#">LogoHere</a>
      </div>      
        <nav>           
            <ul class="navlist nav-list">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="meals.php" class="nav-link">Healthy Meals</a></li>
                <li><a href="fithit.php" class="nav-link">Fit Hit</a></li>
                <li><a href="blog.php" class="nav-link">Blog</a></li>
                <li><a href="aboutus.php" class="nav-link">About Us</a></li>
                <li><a href="contactus.php" class="nav-link">Contact Us</a></li>
                <li class="header-btn"><a href="includes/register.php">Register</a></li>
        </nav>       
    </div>
</div>
</header>

<script>
        window.addEventListener('scroll', function () {
            let header = document.querySelector('header');
            let windowPosition = window.scrollY > 1;
            header.classList.toggle('scrolling-active', windowPosition);
        });
</script>

    
