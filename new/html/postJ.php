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
				<li><a href="home.php" >HOME</a></li>
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
				<a href="loginB.html"  class="iconUSER">
					<i class="fa fa-user"></i>
				</a>
				</fieldset>
		   </div>
		   </form>
		</header>
	
<!-- body section-->

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="postJ">
			<input type="text" name="jname" placeholder="Job Name" required ><br>
			<input list="location" name="location" placeholder="Location/province" required><br>
			<datalist id="location">
			    <option value="Western Province">
			    <option value="Central Province">
			    <option value="Southern Province">
			    <option value="Uva Province">
			    <option value="Sabaragamuwa Province">
			    <option value="North Western Province">
			    <option value="North Central Province">
			    <option value="Eastern Province">
			    <option value="Nothern Province">
			 </datalist>
			<br><span id="due">Due Date <i class='fas fa-caret-down'></i></span><br>
			<input type="date" name="dudedate" placeholder="Due Date" ><br>
			<input type="number" min="0.00" max="100000.00" step="0.01" name="salary" placeholder="Salary" required ><br>
			<input type="text" name="qualification" placeholder="Qualification" required><br>
			<input list="gender" name="gen" id="gen" placeholder="Gender" >
			  <datalist id="gender">
			    <option value="Male">
			    <option value="Female">
			    <option value="Both">
			  </datalist>
			<input type="number" name="experience" placeholder="experience" ><br>
			<input list="type" name="jobtype" placeholder="jobtype">
			<datalist id="type">
			    <option value="Permanent">
			    <option value="Trainee">
			    <option value="Part Time">
			  </datalist>
			  <br>
			<input type="submit" name="submit" value="Post Job" id="submitp" class="post" >
		</form>

<?php

	

	if(isset($_POST["submit"])){

		$sql = "SELECT company_id 
		FROM employer 
		WHERE email LIKE '$mail'";

		$result=mysqli_query($conn, $sql);

		while ($obj = mysqli_fetch_object($result)) {
			$company = $obj->company_id;
		}
		  	
 
		$job = $_POST['jname'];
		$location = $_POST['location'];
		$ddate = $_POST['dudedate'];
		$salary = $_POST['salary'];
		$qlty = $_POST['qualification'];
		$gen = $_POST['gen'];
		$xpe = $_POST['experience'];
		$type = $_POST['jobtype'];
		$today = date("Y-m-d");

		echo $job.$location.$ddate.$salary.$qlty.$gen.$xpe.$type.$today;

		$sql = "INSERT INTO job (job_name,company_id,posted_date,due_date,salary,location,qualification,job_type,experience,gender)
		VALUES ('$job','$company','$today','$ddate','$salary','$location','$qlty','$type','$xpe','$gen')";
		mysqli_query($conn, $sql);
	
		if (mysqli_affected_rows($conn) > 0){
		 echo"<script type='text/javascript'>
				alert=\"incorrect password !!\"
				</script>";
				header("Location: ../html/profileC.php");
				exit();
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