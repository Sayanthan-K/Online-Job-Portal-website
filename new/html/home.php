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
				<li><a href="home.php">HOME</a></li>
				<li><a href="searchlocal.php">LOCAL JOBS</a></li>
				<!-- <li><a href="searchforeign.php">FOREIGN JOBS</a></li> -->
			</ul>
		   </span>
			</fieldset>
			<fieldset class="boxM">
				<form action="jobview.php" method="get">
				<span class="note">WelCome To Our Page</span>
				<!--<label for="searchH" class="clickS">search</label>-->
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

<?php


$sql = "SELECT * 
		from job a, employer b
		WHERE a.company_id = b.company_id
		ORDER BY posted_date DESC";
$i=0;		
$result = mysqli_query($conn,$sql);
if (mysqli_affected_rows($conn) > 0) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
       $name[$i]=$row["job_name"];
       $company[$i]=$row["company_name"];
       $pdate[$i]=$row["posted_date"];
       $ddate[$i]=$row["due_date"];
       $salary[$i]=$row["salary"];
       $location[$i]=$row["location"];
       $qlty[$i]=$row["qualification"];
       $i++;

    }

    $result->free();
}
else{
	echo"<br><div class=\"classic\"><center>SORRY<br>*No new jobs*</center></div>";
}

$data1="<img src=\"../photoj/iso.png\" class=\"jobL\" alt=\"company IMG\"><ul class=\"detailsJ\"><li><span class=\"jobg\" >Job Name : </span><span id=\"list\">$name[0]</span></li><br><li><span class=\"jobg\" >Company Name : </span><span id=\"list\">$company[0]</span></li><br><li><span class=\"jobg\" >Posted Date : </span><span id=\"list\">$pdate[0]</span></li><br><li><span class=\"jobg\" > Due Date : </span><span id=\"list\"> $ddate[0]</span></li><br><li><span class=\"jobg\" >Salary : </span><span id=\"list\">$salary[0]</span></li><br><li><span class=\"jobg\" > Location : </span><span id=\"list\">$location[0]</span></li><br><li><span class=\"jobg\" >Qualification : </span><span id=\"list\">$qlty[0]</span></li></ul>";

$data2="<img src=\"../photoj/iso.png\" class=\"jobL\" alt=\"company IMG\"><ul class=\"detailsJ\"><li><span class=\"jobg\" >Job Name : </span><span id=\"list\">$name[1]</span></li><br><li><span class=\"jobg\" >Company Name : </span><span id=\"list\">$company[1]</span></li><br><li><span class=\"jobg\" >Posted Date : </span><span id=\"list\">$pdate[1]</span></li><br><li><span class=\"jobg\" > Due Date : </span><span id=\"list\"> $ddate[1]</span></li><br><li><span class=\"jobg\" >Salary : </span><span id=\"list\">$salary[1]</span></li><br><li><span class=\"jobg\" > Location : </span><span id=\"list\"> $location[1]</span></li><br><li><span class=\"jobg\" >Qualification : </span><span id=\"list\">$qlty[1]</span></li></ul>";

$data3="<img src=\"../photoj/iso.png\" class=\"jobL\" alt=\"company IMG\"><ul class=\"detailsJ\"><li><span class=\"jobg\" >Job Name : </span><span id=\"list\">$name[2]</span></li><br><li><span class=\"jobg\" >Company Name : </span><span id=\"list\">$company[2]</span></li><br><li><span class=\"jobg\" >Posted Date : </span><span id=\"list\">$pdate[2]</span></li><br><li><span class=\"jobg\" > Due Date : </span><span id=\"list\"> $ddate[2]</span></li><br><li><span class=\"jobg\" >Salary : </span><span id=\"list\">$salary[2]</span></li><br><li><span class=\"jobg\" > Location : </span><span id=\"list\">$location[2]</span></li><br><li><span class=\"jobg\" >Qualification : </span><span id=\"list\">$qlty[2]</span></li></ul>";

$data4="<img src=\"../photoj/iso.png\" class=\"jobL\" alt=\"company IMG\"><ul class=\"detailsJ\"><li><span class=\"jobg\" >Job Name : </span><span id=\"list\">$name[3]</span></li><br><li><span class=\"jobg\" >Company Name : </span><span id=\"list\">$company[3]</span></li><br><li><span class=\"jobg\" >Posted Date : </span><span id=\"list\">$pdate[3]</span></li><br><li><span class=\"jobg\" > Due Date : </span><span id=\"list\">$ddate[3]</span></li><br><li><span class=\"jobg\" >Salary : </span><span id=\"list\">$salary[3]</span></li><br><li><span class=\"jobg\" > Location : </span><span id=\"list\">$location[3]</span></li><br><li><span class=\"jobg\" >Qualification : </span><span id=\"list\">$qlty[3]</span></li></ul>";

$data5="<img src=\"../photoj/iso.png\" class=\"jobL\" alt=\"company IMG\"><ul class=\"detailsJ\"><li><span class=\"jobg\" >Job Name : </span><span id=\"list\">$name[4]</span></li><br><li><span class=\"jobg\" >Company Name : </span><span id=\"list\">$company[4]</span></li><br><li><span class=\"jobg\" >Posted Date : </span><span id=\"list\">$pdate[4]</span></li><br><li><span class=\"jobg\" > Due Date : </span><span id=\"list\">$ddate[4]</span></li><br><li><span class=\"jobg\" >Salary : </span><span id=\"list\">$salary[4]</span></li><br><li><span class=\"jobg\" > Location : </span><span id=\"list\">$location[4]</span></li><br><li><span class=\"jobg\" >Qualification : </span><span id=\"list\">$qlty[4]</span></li></ul>";

$data6="<img src=\"../photoj/iso.png\" class=\"jobL\" alt=\"company IMG\"><ul class=\"detailsJ\"><li><span class=\"jobg\" >Job Name : </span><span id=\"list\">$name[5]</span></li><br><li><span class=\"jobg\" >Company Name : </span><span id=\"list\">$company[5]</span></li><br><li><span class=\"jobg\" >Posted Date : </span><span id=\"list\">$pdate[5]</span></li><br><li><span class=\"jobg\" > Due Date : </span><span id=\"list\">$ddate[5]</span></li><br><li><span class=\"jobg\" >Salary : </span><span id=\"list\">$salary[5]</span></li><br><li><span class=\"jobg\" > Location : </span><span id=\"list\">$location[5]</span></li><br><li><span class=\"jobg\" >Qualification : </span><span id=\"list\">$qlty[5]</span></li></ul>";
?>

		<body>
			<p class="latest" ><span id="latest" >RECENT JOBS</span></p>
			<table class="tableview sentence" id="table">
				<tr>
					<td>
						<i class="fas fa-angle-left" id="nexticon" onclick="showslide();"></i>
					</td>
					<td>
			<fieldset class="latestJob" id="latestJob">
				<?php echo $data1?>
			</fieldset>
		</td>
		<td>
			<fieldset class="latestJob" id="latestJob2"> 
				<?php echo $data2?>
			</fieldset>
		</td>
		<td>
			<fieldset class="latestJob" id="latestJob3">
				<?php echo $data3?>
			</fieldset>
		</td>
		<td>
		<i class="fas fa-angle-right" id="nexticonR" onclick="showslide();"></i>
	</td>
	</tr>
	</table>
	<fieldset class="navi">
		<h2 class="works">HOW it <span class="colouring">WORKS?</span></h2>
		<table style="margin: auto;">
			<tr>
				<td>
					<center>
					<img src="../photoj/add-account.png"></center>
					<p class="heading alignP">Create an Account</p>
					<p class="naviPARA sentence">Sign up by creating an account with required details in order to avail our services. The optimal feeding of correct information will help us fine tune your job search.</p>
				</td>
				<td>
					<center><img src="../photoj/job-search.png"></center>
					<p class="heading alignP">Search Desired Job</p>
					<p class="naviPARA sentence">Providing you with our wide database of job opportunities notified by numerous companies. You can add filters to search your desired jobs and still have a list of options to choose from.</p>
				</td>
				<td>
					<center><img src="../photoj/resume.png"></center>
					<p class="heading alignP">Send Your Resume</p>
					<p class="naviPARA sentence">Once you narrow down with the right choices, get ready to send your resumes. Forward your updated resume to the optimal employers and gear up for the recruitment.</p>
				</td>
			</tr>
		</table>
	</fieldset>
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
	<a href="#" class="topicon" ><i class="fa fa-chevron-circle-up" id="mybtn"></i></a>
		</body>
	</div>

<script type="text/javascript">
	
	var slide= 0;
function showslide(){ 
       if (slide == 0) {
        slide = 1;
        slide1();
    } else if(slide == 1) {
        slide = 0;
        slide0();
    }
}

function slide1(){
	//document.getElementById("latestJob").style.animation = "mynewmove .9s 1";
	document.getElementById("latestJob").innerHTML= '<?php echo $data4;?>';
    document.getElementById("latestJob2").innerHTML= '<?php echo $data5;?>'; 
    document.getElementById("latestJob3").innerHTML= '<?php echo $data6;?>';

}
function slide0(){
    document.getElementById("latestJob").innerHTML= '<?php echo $data1;?>';
    document.getElementById("latestJob2").innerHTML= '<?php echo $data2;?>'; 
    document.getElementById("latestJob3").innerHTML= '<?php echo $data3;?>';
}


scrol();
</script>


</body>
</html>