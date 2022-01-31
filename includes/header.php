<header>
		<div class="navbar navbar-pager">
    <div class="container">
      <div class="logo" id="logo">
        <a href="#">LogoHere</a>
      </div>
          <img class="mobile-menu menu-btn" id="mobile-cta" src="images/mobile-menu.svg">    
        <nav>    
          <img class="menu-exit menu-btn" id="mobile-exit" src="images/menu-close.svg">   
            <ul class="navlist nav-list">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="meals.php" class="nav-link">Healthy Meals</a></li>
                <li><a href="fithit.php" class="nav-link">Fit Hit</a></li>
                <li><a href="blog.php" class="nav-link">Blog</a></li>
                <li><a href="aboutus.php" class="nav-link">About Us</a></li>
                <li><a href="contactus.php" class="nav-link">Contact Us</a></li>
                <div class="header-btn">
                <a href="includes/register.php">Register</a>
                </div>
            </ul>
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
<script>        

        const mobileBtn = document.getElementById('mobile-cta')
              nav = document.querySelector('nav')
              mobileBtnExit = document.getElementById('mobile-exit');

        mobileBtn.addEventListener('click', () => {
          nav.classList.add('menu-btn');
        })

        mobileBtnExit.addEventListener('click',() => {
          nav.classList.remove('menu-btn');
        })

</script>

    
