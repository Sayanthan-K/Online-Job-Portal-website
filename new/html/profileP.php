	<?php
include'config.php';

	$sql = "SELECT * FROM employee WHERE mail LIKE '$mail'";
	$result=mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0) {
    while ($row = $result->fetch_assoc()){
    	$_SESSION['nameP'] = $name = $row['employee_name'];
    	$fname = $row['father_name'];
    	$mobile = $row['mobile_number'];
    	$addr = $row['address'];
    	$pass = $row['password'];
    	$gender = $row['gender'];
    	$dob = $row['date_of_birth'];
    	$id = $row['employee_id'];
    	$_SESSION['photoP']=$photo = $row['profile_image'];
    }
}

	$sql = "SELECT * FROM favorite_job WHERE employee_id LIKE '$id'";
	$result=mysqli_query($conn, $sql);
	$favjob = mysqli_affected_rows($conn);

	$sql = "SELECT * FROM applied_job WHERE employee_id LIKE '$id'";
	$result=mysqli_query($conn, $sql);
	$applyjob = mysqli_affected_rows($conn);

	$sql = "SELECT * FROM interview WHERE employee_id LIKE '$id'";
	$result=mysqli_query($conn, $sql);
	$approvedjob = mysqli_affected_rows($conn);

	if(isset($_POST["log"])){
		$_SESSION['mailP'] = NULL;
		$_SESSION['passP'] = NULL;
		header("Location: ../html/home.php");
		exit();
	}
	//notification colour changer
	$sql="SELECT * 
	FROM interview 
	WHERE employee_id LIKE '$id'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0){
		$noti = "blue";
	}

	//favorite colour changer
	$sql = "SELECT *
		from favorite_job
		WHERE employee_id LIKE '$id'";

	$result = mysqli_query($conn,$sql);

	if (mysqli_affected_rows($conn) > 0){
		$fav = "blue";
	}

	//job alert color changer
	$sql = "SELECT * 
		from job
		ORDER BY posted_date DESC";

	$result = mysqli_query($conn,$sql);
	if (mysqli_affected_rows($conn) > 0){
		$alert = "blue";
	}

	//remove photo
	if(isset($_POST["removephoto"])){
		$sql = "UPDATE employee SET profile_image = 'user1.png' WHERE employee_id LIKE '$id'";
		mysqli_query($conn, $sql);
		if (mysqli_affected_rows($conn) > 0){
			//echo "<script type=\"text/javascript\">alert(\"profile photo removed.\");</script>";
			header("location:profileP.php");
		}
	}
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
			<form action="jobview.php">
			<div class="stick">
			<fieldset class="boxH">
			<p class="heading">
			<img src="../photoj/logoWEb.png" class="logo">
			<span class="headingW">We Leads You A Better Life!!</span>
			<span class="searchP">
				<input type="search" name="search" id="searchHP" class="searchHP"  placeholder="search.." required >
			<label class="iconS" for="subhidden">
					<i class="fa fa-search"></i>
				</label>
				<input type="submit" name="searchM" style="display: none;" id="subhidden">
			</span>			
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
		   </div>
		   </form>
		</header>
	
<!-- body section-->






		<div class="cover">
			<img src="../photoj/cover1.jpg" class="coverimg">
			<img src="<?php echo "../photoj/$photo";?>" class="userimg" id="userimg" onclick="changeimg();">
			<ul id="ddp" class="ddp">
				<li><a href="changephoto.php">Change Photo</a></li>
				<li><a href="changephoto.php">Upload Photo</a></li>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<input type="submit" name="removephoto" value="Remove Photo" id="remove">
				<li><a><label for="remove">Remove Photo</label></a></li>
				</form>
			</ul>
			<span class="buttonP">
				<a href="notiP.php" title="interview notifications"><i class="material-icons noti" style="font-size:36px; color: <?php echo $noti; ?>">notifications</i></a>
				<a href="favorite.php" title="favorite list"><i class="material-icons fav" style="font-size:36px;color: <?php echo $fav; ?>">favorite</i></a>
				<a href="jobAlert.php" title="job alerts"><i class="material-icons alert" style="font-size:36px;color: <?php echo $alert;?>">message</i></a>
				<span class="logout">
				<button><a href="editP.php">Edit Profile</a></button>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<input class="out" type="submit" name="log" value="Log Out"  >
				</form>
				</span>
				<p class="username" id="username"><?php echo $name ;?></p>
			</span>
		</div>
		<fieldset class="containP">
			<fieldset class="profileE">
				<legend class="legend">Personal Details</legend>
				<ul>
					<hr><li>User Name : <?php echo $name ?> <a href="changeuser.php" class="EP">Edit</a></li><hr>
					<li>Father Name : <?php echo $fname ?> </li><hr>
					<li>Gender : <?php echo $gender ?> </li><hr>
					<li>date of birth : <?php echo $dob ?> </li><hr>
					<li>User Email : <?php echo $mail ?> <a href="changemail.php" class="EP">Edit</a></li><hr>
					<li>Mobile No : <?php echo $mobile ?> <a href="changemob.php" class="EP">Edit</a></li><hr>
					<li>User Address : <?php echo $addr ?> <a href="changeaddr.php" class="EP">Edit</a></li><hr>
					<li>Password : <?php echo "********" ?> <a href="changepass.php" class="EP">Edit</a></li><hr>
				</ul>
			</fieldset><br>
			<fieldset class="profileE">
				<legend class="legend">Job Details</legend>
				<ul>
					<hr><li>No of Applied Jobs : <?php echo $applyjob ?></li><hr>
					<li>No of Jobs in Favorite : <?php echo $favjob ?></li><hr>
					<li>No of Interviews : <?php echo $approvedjob ?></li><hr>
				</ul>
			</fieldset>
			<a href="delete.php" id="del">Delete Profile</a>
		</fieldset>
		<div style="height: 25px;">
		<a href="resumeB.html" id="resume">Resume</a>
	</div>


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
							<li><i class="fas fa-user-alt" id="logoFo"></i><a href="loginP.php" class="linkJ">Log In</a></li>
							<li><i class="fas fa-search" id="logoFo"></i><a href="searchlocal.php" class="linkJ">Search job</a></li>
							<li><i class="fas fa-cloud-upload-alt" id="logoFo"></i><a href="" class="linkJ">post job</a></li>
							<li><a href="" class="linkJ" style="color: #009999" >a</a></li>
						</ul>
						</td>
						<td>
							<ul class="detailsFO">
							<li class="tableH">Employee</li>
							<li><i class="fas fa-user-alt" id="logoFo"></i><a href="loginC.php" class="linkJ">Log In</a></li>
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