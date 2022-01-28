<?php
include'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Job Jet</title>
	<link rel="stylesheet" type="text/css" href="../css/stylejob.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="../js/scriptjob.js"></script>
	<meta charset="utf-8">
	 <meta http-equiv="Location" content="otpv.php/">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body id="total">
	<div class="backL" id="backL">
		<header class="header">
			<div class="stick">
			<fieldset class="boxH">
			<p class="heading">
			<img src="../photoj/logoWEb.png" class="logo">
			<span class="headingW">We Lead You A Better Life!!</span>
			<span id="date" class="date">
			<script type="text/javascript">
					date();
			</script>
		    </span>
		    </p>
			<span class="buttonTOP">
			<ul class="button1">
				<?php if($validation == 1){echo "<li><a href=\"profileC.php\" >PROFILE</a></li>";}?>
				<?php if($validation == 2){echo "<li><a href=\"profileP.php\" >PROFILE</a></li>";}?>
				<li><a href="home.php">HOME</a></li>
				<li><a href="searchlocal.php">LOCAL JOBS</a></li>
				<!-- <li><a href="searchforeign.php">FOREIGN JOBS</a></li> -->
			</ul>
		   </span>
			</fieldset>
			<fieldset class="boxM">
				<form action="jobview.php">
				<span class="note">WelCome To Our Page</span>
				<input type="search" name="search" id="searchH" class="searchH"  placeholder="search.." required >
				<label class="icon" for="subhidden">
					<i class="fa fa-search"></i>
				</label>
				<input type="submit" name="searchM" style="display: none;" id="subhidden">
				<button class="logIN"><a href="loginC.php">Employer LogIn</a></button>
				<button class="logIN"><a href="loginP.php" >Employee LogIn</a></button>
				<a href="loginB.html" class="iconUSER">
					<i class="fa fa-user"></i>
				</a>
				</fieldset>
		   </div>
		   </form>
		</header>
	
<!-- body section-->
<span>

		<div class="slideshow-container">

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="../photoj/random1.jpg" style="width:300px;height: 650px;" class="slide">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="../photoj/random2.jpg" style="width:300px;height: 650px;" class="slide">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="../photoj/random3.jpg" style="width:300px;height: 650px;" class="slide">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="../photoj/random4.jpg" style="width:300px;height: 650px;" class="slide">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="../photoj/random5.jpg" style="width:300px;height: 650px;" class="slide">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="../photoj/random6.jpg" style="width:300px;height: 650px;" class="slide">
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="../photoj/random7.jpg" style="width:300px;height: 650px;" class="slide">
			</div>

			</div>
			<br>
			

		<script type="text/javascript">
	var slideIndex = 0;
	showSlides();
	function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}   

  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
			</script>

<!--end slide show-->
</span>
<div class="signup">
	<div class="contain">
		<h1>SIGN UP <span class="heading alignP">as employer</span></h1>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<div>
			<i class="fas fa-building"></i>
			<input type="text" placeholder="Company Name" required name="Cname">
		</div>
		<div>
			<i class="fas fa-user"></i>
			<input type="text" placeholder="Name of CEO" required name="CFname">
		</div>
		<div>
			<i class="fas fa-envelope"></i>
			<input type="mail" placeholder="E-mail" required name="Cmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" >
		</div>
		<div>
			<i class="fas fa-phone"></i>
			<input type="text" placeholder="Mobile Number" required name="CMnum" pattern="[0-9]{10}">
		</div>
		<div>
			<i class="material-icons" >location_on</i>
			<textarea  rows="4" cols="52" placeholder="  Address..." name="Caddr" ></textarea>
		</div>
		<div>
			<i class="fas fa-key"></i>
			<input type="password"  placeholder="Password" id="pw1" required name="Cpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
		</div>
		<div>
			<i class="fas fa-key"></i>
			<input type="password"  placeholder="Confirm Password" id="pw2" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
		</div>
		<p class="classic">Accept our Privacy Policy to SIGN UP</p>
		<input type="submit"  id="submit" value="Sign Up    " onclick="passwordchk()" name="employersign" disabled>
	</form>
	</div>


</div>
	<center>
	<fieldset class="termssign">
		<center><p class="heading">Privacy Policy</p></center>
		<p class="naviPARA sentence" >This portal only acts as a platform for facilitating employment opportunities in private sector establishments. Vacancies in Government department /public sector undertakings are not notified in this portal.</p>
		<span id="acc"><input type="checkbox" name="check" id="ac" onclick="enable();"><label class="classic" id="ACCEPT" for="ac">ACCEPT  PRIVACY  POLICY</label></span>
	</fieldset>
	</center>
	<?Php


	if(isset($_POST["employersign"])){
	$name=$_POST['Cname'];
	$fname=$_POST['CFname'];
	$mail=$_POST['Cmail'];
	$num=$_POST['CMnum'];
	$addr=$_POST['Caddr'];
	$pass=$_POST['Cpass'];

	$sql="SELECT * 
	from employee 
	where mail like '$mail'";

	$sql1="SELECT * 
	from employer 
	where email like '$mail'";

	$result = mysqli_query($conn, $sql);
	$valid =0;
	if (mysqli_affected_rows($conn) > 0){
		echo"<script type=\"text/javascript\">
		alert(\"email address has already been taken!!\");
		</script>";
		$valid = 1;
	}

	$result = mysqli_query($conn, $sql1);
	if(mysqli_affected_rows($conn) > 0){
		echo"<script type=\"text/javascript\">
		alert(\"email address has already been taken!!\");
		</script>";
		$valid = 1;
	}
	if($valid != 1){
		$_SESSION['mailer']=$mail;
		$_SESSION['nameC']=$name;
		$_SESSION['fnameC']=$fname;
		$_SESSION['mailC']=$mail;
		$_SESSION['numC']=$num;
		$_SESSION['addrC']=$addr;
		$_SESSION['passC']=$pass;
		$_SESSION['user']="employer";
		
		echo "<script> location.replace(\"../php/mailerS.php\"); </script>";
		
	}
}


	?>
<!-- body section/t&c-->	
	<span></span>
<div id="tndcV">
	<h2 class="heading alignP">Terms and Condition<i class="fa fa-close" href="#"  onclick="closeS();"> </i></h2>
	<p class="naviPARA sentence" >This portal only acts as a platform for facilitating employment opportunities in private sector establishments. Vacancies in Government department /public sector undertakings are not notified in this portal.</p>
</div>

	<!-- footer section-->
		<fieldset class="footer">
			<div>
			<img src="../photoj/logoWEb.png" class="logo"></th>
							<div class="flow">
									    <h4 class="_14">Follow us on</h4>
						    <ul class="social-icons">
						        <li><a href="https://www.facebook.com/" class="social-icon"> <i class="fab fa-facebook-f"></i></a></li>
						        <li><a href="https://twitter.com/?lang=en" class="social-icon"> <i class="fab fa-twitter"></i></a></li>
						        <li><a href="https://www.rssinclude.com/login" class="social-icon"> <i class="fa fa-rss"></i></a></li>
						        <li><a href="https://www.youtube.com/" class="social-icon"> <i class="fab fa-youtube-square"></i></a></li>
						        <li><a href="https://lk.linkedin.com/" class="social-icon"> <i class="fab fa-linkedin-in"></i></a></li>
						        <li><a href="https://github.com/login" class="social-icon"> <i class='fab fa-github'></i></a></li>
						    </ul>
						</div>

			<div>
				<center>
				<table class="footerLink tabelF">
					<tr>
						<td>
						<ul class="detailsFO ">
							<li class="tableH">Employer</li>
							<li><i class="fas fa-user-alt" id="logoFo"></i><a href="loginC.php" class="linkJ">Log In</a></li>
							<li><i class="fas fa-search" id="logoFo"></i><a href="searchlocal.php" class="linkJ">Search job</a></li>
							<li><i class="fas fa-cloud-upload-alt" id="logoFo"></i><a href="" class="linkJ">post job</a></li>
							<li><a href="" class="linkJ" style="color: #009999" >a</a></li>
						</ul>
						</td>
						<td>
							<ul class="detailsFO">
							<li class="tableH">Employee</li>
							<li><i class="fas fa-user-alt" id="logoFo"></i><a href="loginP.php" class="linkJ">Log In</a></li>
							<li><i class="fas fa-search" id="logoFo"></i><a href="searchlocal.php" class="linkJ">Search job</a></li>
							<li><i class="fas fa-file-export" id="logoFo"></i><a href="" class="linkJ">Apply job</a></li>
							<li><a href="" class="linkJ" style="color: #009999" >a</a></li>
							</ul>
						</td>
					</tr>
				</table>
				</center>	
			</div>
						<div>
							<span>
								<button id="tndc" class="tndc" onclick="tndc();"><a href="#">Terms and Condition</a></button>
								<button class="tndc"><a href="feedback.php">  send feedback  </a></button>
								<!--<button id="flow" class="flow" onclick="tndc();">Flow</button>-->
							</span>
							<ul class="detailsF sentence addr"><li><address>
							<i class="material-icons" id="logoFo">edit_location</i>
							Galle road,
							Wellavata,
							Colombo 6
							</address></li>
							<li><i class="fas fa-phone-alt" id="logoFo"></i>0778862172</li><li><a href = "mailto: project2020sliit@gmail.com" class="linkJ" style="color: #993300 "><i class="material-icons" id="logoFo">mail</i>project2020sliit@gmail.com</a></li></ul>
							<div class="bottom">Copyright 2018 © JOBJET. All Rights Reserved. Designed & Developed by project2020</div>
						</div>

		</fieldset>
	<a href="#" class="topicon"><i class="fa fa-chevron-circle-up" id="mybtn"></i></a>
		</body>
	</div>
	<script type="text/javascript">
	scrol();
</script>

</body>
</html>