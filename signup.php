<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
    <link rel="stylesheet" href="style.css">
   
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="nav container">
            <!--- Logo -->
            <a href="index.php" class="logo"><i class='bx bx-swim'>Global</i>WSC</a>
          
            <!--- Log In Button -->
            <a href="login.php" class="btn">Log In</a>
        </div>

    </header>
    <!---- Sign Up --->
    <div class="lll container">
        <div class="lll-co">
            <h2>Welcome , Let's get started</h2>
            <p>Already have account <a href="login.php">Log In</a></p>
            <!----- Login Form ---->
            <form action="">
                <span>Full Name</span>
                <input type="text" name="" id="" placeholder="Your Name" required>
                <input type="email" name="" id="" placeholder="yourmail@gmail.com" required>
                <span>Phone</span>
                <input type="tel" name="" id="" placeholder="Enter your number" required>
                <span>Enter your password</span>
                <input type="password" name="" id="" placeholder="At least 8" required>
                <input type="submit" value="Sign Up" class="buttom">
                <a href="login.php">Already have account</a>
            </form>
            <a href="login.php" class="btn">Log In</a>
        </div>
        <!----- Log In  Image ---->
        <div class="lll-img">
            <img src="images/signup.jpg" alt="j">
        </div>
    </div>
 
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
</body>
</html>