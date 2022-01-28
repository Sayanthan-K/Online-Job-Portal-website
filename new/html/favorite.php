<?php

include'config.php';
$photo=$_SESSION['photoP'];
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
				<input type="search" name="search" id="searchH" class="searchHP"  placeholder="search.." required >
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
			
			<span class="buttonP">
				<a href="notiP.php"><i class="material-icons noti" style="font-size:36px">notifications</i></a>
				<a href="favorite.php"><i class="material-icons fav" style="font-size:36px">favorite</i></a>
				<a href="jobAlert.php"><i class="material-icons alert" style="font-size:36px">message</i></a>
				<p class="username" id="username"><?php echo $_SESSION['nameP'];?></p>
			</span>
		</div>
		<fieldset class="hdd">
	<p class="hd">FAVORITE LIST</p></fieldset>
<!-- favorite part -->	


<?php


$mail=$_SESSION['mailP'] ;

$sql = "SELECT *
		from favorite_job b , job a , employer c
		WHERE b.job_id = a.job_id AND b.employee_id = (SELECT employee_id FROM employee WHERE mail LIKE '$mail') AND c.company_id = a.company_id";

$result = mysqli_query($conn,$sql);

if (mysqli_affected_rows($conn) > 0) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
       echo"<fieldset class=\"favList\">
				<img src=\"../photoj/fav.png\" alt=\"company logo\" class=\"favL size\">
		    	<ul class=\"detailsS\">
					<li id=\"jobws\">Job Name : <span class=\"det\">".$row['job_name']."</span></li><br>
					<li id=\"jobws\">Company Name : <span class=\"det\">".$row['company_name']."</span></li><br>
					<li id=\"jobws\">Posted Date : <span class=\"det\">".$row['posted_date']."</span> , Due Date : <span class=\"det\">".$row['due_date']."</span> </li><br>
					<li id=\"jobws\">Salary : <span class=\"det\">".$row['salary']."</span> , Location : <span class=\"det\">".$row['location']."</span></li><br>
					<li id=\"jobws\">Qualification : <span class=\"det\">".$row['qualification']."</span></li>
				</ul>
				<form action=\"../php/index.php\" method=\"post\">
				<input value=\"".$row['job_id']."\" type=\"hidden\" name=\"name\">
				<input value=\"".$row['employee_id']."\" type=\"hidden\" name=\"empid\">
				<input type=\"submit\" name=\"removefav\"  id=\"addfav\" class=\"favB\" value=\"remove from Favourite\">
				<input type=\"submit\" class=\"favB\" name=\"applyjob1\" value=\"Apply Job\">
				</form>
		</fieldset>";

    }

    //$result->free();
}
else{
	echo"<br><div class=\"classic\"><center>SORRY<br>*No jobs in fav list*</center></div>";
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