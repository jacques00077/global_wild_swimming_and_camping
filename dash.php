<?php
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
?>
	<script>
		window.location.href='index.php';
	</script>
	<?php
}else{
	echo "Welcome";
}
?> || 
<a href="logout.php">Logout</a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GWSC website</title>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6426b32e4247f20fefe90863/1gsrinrsr';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


    
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="nav container">
            <!--- Logo -->
            <a href="index.php" class="logo"><i class='bx bx-swim'>Global</i>WSC</a>
            <!--- Menu Icon -->
            <input type="checkbox" name="" id="menu">
            <label for="menu" <i class='bx bx-menu' id="menu-icon"></i></label>
            <!-- Nav List -->
            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="information.php">Information</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="review.php">Review</a></li>
                <li><a href="pitch.php">Pitch</a></li>
                <li><a href="local.php">Local Attraction</a></li>
                <li><a href="feature.php">Features</a></li>
               
            </ul>
            <!--- Log In Button -->
            <a href="index.php" class="btn">Log Out</a>
        </div>

    </header>
    

    <div class="con">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide"><img src="images/img2.jpg" alt="j"></div>
              <div class="swiper-slide"><img src="images/slider-img1.jpg" alt="j"></div>
              <div class="swiper-slide"><img src="images/slider-img8.jpg" alt="j"></div>
              <div class="swiper-slide"><img src="images/slider-img33.jpg" alt="j"></div>
              <div class="swiper-slide"><img src="images/slider-img55.jpg" alt="j"></div>
              <div class="swiper-slide"><img src="images/slider-img66.jpg" alt="j"></div>
              <div class="swiper-slide"><img src="images/slider-img77.jpg" alt="j"></div>
              
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
    </div>

    <div class="search">
        <input class="srch" type="search" name="jacques" placeholder="type to text" >
        <button class="srch-btn">search</button>
    </div>


    <script>
        (function(d, s, id) {
            if (d.getElementById(id)) {
                if (window.__TOMORROW__) {
                    window.__TOMORROW__.renderWidget();
                }
                return;
            }
            const fjs = d.getElementsByTagName(s)[0];
            const js = d.createElement(s);
            js.id = id;
            js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

            fjs.parentNode.insertBefore(js, fjs);
        })(document, 'script', 'tomorrow-sdk');
        </script>

        <div class="tomorrow"
           data-location-id="052149"
           data-language="EN"
           data-unit-system="METRIC"
           data-skin="light"
           data-widget-type="upcoming"
           style="padding-bottom:22px;position:relative;"
        >
          <a
            href="https://www.tomorrow.io/weather-api/"
            rel="nofollow noopener noreferrer"
            target="_blank"
            style="position: absolute; bottom: 0; transform: translateX(-50%); left: 50%;"
          >
            <img
              alt="Powered by the Tomorrow.io Weather API"
              src="https://weather-website-client.tomorrow.io/img/powered-by.svg"
              width="250"
              height="18"
            />
          </a>
        </div>

    <!--- Home --->
    <section class="f container" id="f">
        <div class="heading">
            <h2><span>Welcome To</span></h2>
            <p>Global Wild Swimming and Camping</p>
         
        </div>
    </section>
    <section class="hom container" id="hom">
        
        
    </section>
    <!---- Information -->
    <section class="info container" id="info">
        <div class="info-img">
            <img src="images/p1.jpg" alt="j">
        </div>
        <div class="info-text">
            <h2><span>About Us</span></h2>
            <h3>We Provide The Best <br>Swimming Sites</h3>
            <p>Enjoy a campfire, wild swimming, a beach day out at Shell Island or an endless list of stunning activities in the Snowdonia National Park from this well placed site.</p>
            <p>Nantcol Waterfalls is just as deep in waterfall country as you'd expect and pitches benefit from the gentle babbling of a river that runs by.</p>
            <p>Make some great family memories in your tourer, under canvas or even in a lovely glamping pod or bell tent.</p>
            <a href="information.php" class="btn">Learn More</a>
        </div>
    </section>

    <section class="location">
    <div class="heading">
            <h2><span>Location Map</span></h2>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.626041358488!2d-0.17553878531719533!3d5.622100295924309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9b13b0062aad%3A0x75de9717e31b2442!2sAccra%20Mall!5e0!3m2!1sen!2sgh!4v1663628397991!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    
       <!------- Newsletter ---->
       <section class="neleer container">
        <h2>Have Question in Mind? <br>Let us help you</h2>
        <form action="">
            <input type="email" name="" id="email-box" placeholder="youremail@gmail.com" required>
            <input type="submit" value="Send" class="btn">
        </form>

        <h2>RSS Feed</h2>

<form>
<label>
<select id="rss-input">
    <option value="">Select an rss feed</option>
    <option>Google</option>
    <option>NBC</option>
</select>

<button id="clear-rss" type="button" class="btn">Clear Feed</button>
</form>
<p id="rss-output"></p>


<!-- Ajax and javascript -->
<script>
// Event listener to select token
document.getElementById('rss-input').addEventListener('change', function() {
showRSS(this.value);
});


// Send token to get rss feed
function showRSS(token) {
var rssOutput = document.getElementById('rss-output');
if (token.length == 0) {
    rssOutput.innerHTML = "";
    return;
}

if (XMLHttpRequest) {
    var xhr = new XMLHttpRequest();
} else {
    var xhr = new ActiveXObject("Microsoft.XMLHTTP");
}

xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        rssOutput.innerHTML = this.responseText;
    } else {
        rssOutput.innerHTML = 'Fetching RSS feed from ' + token.toUpperCase() + ', please wait...';
    }
}

xhr.open('GET', 'getrssfeed.php?q=' + token, true);
xhr.send();
}

// Clear the feed
document.getElementById('clear-rss').addEventListener('click', function() {
document.getElementById('rss-output').innerHTML = ""; 
});
</script>

    </section>

    
    <!-------- Footer ----->
    <section class="fter">
        <div class="fter-container container">
            <h2>GWSC</h2>
            <div class="fter-box">
                <h3>Quick Links</h3>
                <a href="index.php">Home</a>
                <a href="information.php">Information</a>
                <a href="contact.php">Contact</a>
                <a href="review.php">Review</a>
                <a href="pitch.php">Pitch</a>
                <a href="local.php">Attraction</a>
                <a href="feature.php">Features</a>
            </div>
            <div class="fter-box">
                <h3>Extra Links</h3>
                <a href="#">Privacy Policy</a>
                <a href="local.php">Location</a>
                <a href="pitch.php">Tent</a>
            </div>
            <div class="fter-box">
                <h3>Contact</h3>
                <a href="#">+233 (0)269 082028</a>
                <a href="#">gwsc@gmail.com</a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
        </div>
    </section>
    <!------ Copyright ---->
    <div class="copyright">
        <p>You are here &#169; Jacques All Right Reserved</p>
    </div>

<!--- swiper js link -----> 
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
 const swiper = new Swiper('.swiper', {
   autoplay: {
    delay: 3000,
    disableOnInteraction: false,
   },   
  loop: true,

  pagination: {
    el: '.swiper-pagination',
    clickable:true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
</script>

</body>
</html>