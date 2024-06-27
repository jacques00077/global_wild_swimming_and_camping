<?php
session_start();
include_once('config.php');
$msg='';
if(isset($_POST['submit'])){
	$time=time()-30;
	$ip_address=getIpAddr();
// Getting total count of hits on the basis of IP
	$query=mysqli_query($con,"select count(*) as total_count from loginlogs where TryTime > $time and IpAddress='$ip_address'");
 $check_login_row=mysqli_fetch_assoc($query);
	$total_count=$check_login_row['total_count'];
  //Checking if the attempt 3, or youcan set the no of attempt her. For now we taking only 3 fail attempted
	if($total_count==3){
		$msg="To many failed login attempts. Please login after 600 sec";
	}else{
    //Getting Post Values
		$username=$_POST['username'];
		$password=md5($_POST['password']);
    // Coding for login
		$res=mysqli_query($con,"select * from user where username='$username' and  password='$password'");
		if(mysqli_num_rows($res)){
			$_SESSION['IS_LOGIN']='yes';
			mysqli_query($con,"delete from loginlogs where IpAddress='$ip_address'");
			
     echo "<script>window.location.href='dash.php';</script>";

		}else{
			$total_count++;
			$rem_attm=3-$total_count;
			if($rem_attm==0){
				$msg="To many failed login attempts. Please login after 600 sec";
			}else{
				$msg="Please enter valid login details.<br/>$rem_attm attempts remaining";
			}
			$try_time=time();
			mysqli_query($con,"insert into loginlogs(IpAddress,TryTime) values('$ip_address','$try_time')");
			
		}
	}
}

// Getting IP Address
function getIpAddr(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
       $ipAddr=$_SERVER['HTTP_CLIENT_IP'];
    }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
       $ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
       $ipAddr=$_SERVER['REMOTE_ADDR'];
    }
   return $ipAddr;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
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
            <a href="signup.php" class="btn">Sign Up</a>
        </div>

    </header>
    <!---- Log In --->
    <div class="lll container">
        <div class="lll-co">
            <h2>Login To Continue</h2>
            <p>Log in with your data that you entered <br>during your registration</p>
            <!----- Login Form ---->
            <form NAME ="form1" METHOD ="POST" action="login.php">
            <div class="form-group">
               <label for="username" class="text-info">Username:</label><br>
               <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="form-group">
               <label for="password" class="text-info">Password:</label><br>
               <input type="password" name="password" id="password" class="form-control" required>
               </div>
               <div class="form-group">
                            <a href="index.php">  <input type="submit" name="submit" class="buttom" value="Log In"></a>
                           </div>
						   <div id="result"><?php echo $msg?></div>
                <a href="change_password.php">Change Password?</a>
            </form>
            
            <a href="signup.php" class="btn">Sign up now</a>
        </div>
        <!----- Log In  Image ---->
        <div class="lll-img">
            <img src="images/login.jpg" alt="">
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





