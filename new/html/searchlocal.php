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
		<div>
			<center>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<input type="search" name="search" id="searchl" class="searchl" placeholder="for advance search.." required>
			<label class="icon" for="subhiddenF">
					<i class="fa fa-search"></i>
				</label>
				<input type="submit" name="searchL" style="display: none;" id="subhiddenF">
			</form>
		    </center>
		    <aside>
		    	<br>
		    	<fieldset class="filter">
		    		<h3 class="classic alignP">SEARCH BY FILTER</h3>
		    		<div class="searchalign">
		    		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		    		<p>Filter by Location  <i class="fas fa-angle-down" onclick="showddl1();" id="ddI1"></i></p>
		    		<!--dropdown-->
		    		<div class="dd" id="dd1">
		    			<input type="radio" id="Western Province" value="Western Province" name="Location">
						<label for="Western Province">Western Province</label><br>
						<input type="radio" id="Central Province" value="Central Province" name="Location">
						<label for="Central Province">Central Province</label><br>
						<input type="radio" id="Southern Province" value="Southern Province" name="Location">
						<label for="Southern Province">Southern Province</label><br>
						<input type="radio" id="Uva Province" value="Uva Province" name="Location">
						<label for="Uva Province">Uva Province</label><br>
						<input type="radio" id="Sabaragamuwa Province" value="Sabaragamuwa Province" name="Location">
						<label for="Sabaragamuwa Province">Sabaragamuwa Province</label><br>
						<input type="radio" id="North Western Province" value="North Western Province" name="Location">
						<label for="North Western Province">North Western Province</label><br>
						<input type="radio" id="North Central Province" value="North Central Province" name="Location">
						<label for="North Central Province">North Central Province</label><br>
						<input type="radio" id="Eastern Province" value="Eastern Province" name="Location">
						<label for="Eastern Province">Eastern Province</label><br>
						<input type="radio" id="Nothern Province" value="Nothern Province"  name="Location">
						<label for="Nothern Province">Nothern Province</label><br>
		    		</div>

		    		<div>
		    		<p>Filter by Type  <i class="fas fa-angle-down" onclick="showddl2();" id="ddI2"></i></p>
		    		<div class="dd" id="dd2">
		    			<input type="radio" value="Permanent" id="Permanent" name="type" >
						<label for="Permanent">Permanent</label><br>
						<input type="radio" value="Trainee" id="Trainee" name="type">
						<label for="Trainee">Trainee</label><br>
						<input type="radio" id="Part Time" value="Part Time" name="type">
						<label for="Part Time">Part Time</label><br>
		    		</div>

		    		<div>
		    		<p>Filter by Gender  <i class="fas fa-angle-down" onclick="showddl3();" id="ddI3"></i></p>
		    		<div class="dd" id="dd3">
		    			<input type="radio" id="Male" value="Male" name="Gender">
						<label for="Male">Male</label><br>
						<input type="radio" id="Female" value="Female" name="Gender" >
						<label for="Female">Female</label><br>
						<input type="radio" id="Both" value="Both" name="Gender" >
						<label for="Both">Both</label><br>
		    		</div>

		    		<div>
		    		<p>Filter by Experience  <i class="fas fa-angle-down" onclick="showddl4();" id="ddI4"></i></p>
		    		<div class="dd" id="dd4">
		    			<input type="radio" id="Fresher" value="Fresher" name="Experience">
						<label for="Fresher">Fresher</label><br>
						<input type="radio" id="1-3 Years" value="1-3 Years" name="Experience">
						<label for="1-3 Years">1-3 Years</label><br>
						<input type="radio" id="3-5 Years" value="3-5 Years" name="Experience"  >
						<label for="3-5 Years">3-5 Years</label><br>
						<input type="radio" id="Above 6 Years" value="Above 6 Years" name="Experience">
						<label for="Above 6 Years">Above 6 Years</label><br>
		    		</div>

		    		<div>
		    		<p>Filter by Salary  <i class="fas fa-angle-down" onclick="showddl5();" id="ddI5"></i></p>
		    		<div class="dd" id="dd5">
		    			<input type="radio" id="15000" value="15000" name="Salary">
						<label for="15000">Below 15,000</label><br>
						<input type="radio" value="25000" id="25000" name="Salary" >
						<label for="25000">Below 25,000</label><br>
						<input type="radio" id="50000" value="50000" name="Salary" >
						<label for="50000">Below 50,000</label><br>
						<input type="radio" id="Above 50,000" value="2000" name="Salary" >
						<label for="Above 50,000">Above 50,000</label><br>
		    		</div>

		    		<div>
		    		<p>Filter by Companies  <i class="fas fa-angle-down" onclick="showddl6();" id="ddI6"></i></p>
		    		<div class="dd" id="dd6">
		    			<input type="radio" id="Wso2" value="Wso2" name="Companies" >
						<label for="Wso2">Wso2</label><br>
						<input type="radio" id="Omobio" value="Omobio" name="Companies" >
						<label for="Omobio">Omobio</label><br>
						<input type="radio" id="Virtusa" value="Virtusa" name="Companies" >
						<label for="Virtusa">Virtusa</label><br>
						<input type="radio" id="Inova" value="Inova" name="Companies" >
						<label for="Inova">Inova</label><br>
						<input type="radio" id="Ustroke" value="Ustroke"  name="Companies">
						<label for="Ustroke">Ustroke</label><br>
						<input type="radio" id="Sysco Laps" value="company1" name="Companies">
						<label for="Sysco Laps">Sysco Laps</label><br>
						<input type="radio" id="other" value="%" name="Companies">
						<label for="other">Others</label><br>
		    		</div>


		    	</div>
		    	<input type="submit" value="Apply Filter" id="submitF" name="submitF">
		    </form>
		    	</fieldset>
<fieldset class="jobviewS">
<?php
		
if(isset($_POST["searchL"]) OR isset($_POST["submitF"])){	

		if(isset($_POST["searchL"])){
			$search=  $_POST['search'];
			$_SESSION['searchj'] = $search;
				
				$sql = "SELECT * 
				FROM job a, employer b
				WHERE job_name LIKE '%$search%' AND a.company_id LIKE b.company_id";
				$result = mysqli_query($conn,$sql);
				$res = mysqli_affected_rows($conn);
				 if (mysqli_affected_rows($conn) < 0) {
				 	$res =0;
				 }
				echo "(".$res.")result(s) found.";
				if (mysqli_affected_rows($conn) > 0){
					while ($row = $result->fetch_assoc()){
		 		echo"<div class=\"sview\">
		    			<img src=\"../photoj/disclaimer.png\" alt=\"company logo\" class=\"searchJL\">
		    	<ul class=\"detailsS\">
					<li>Job Name : <span class=\"jobrs\" id=\"jobrs\">".$row['job_name']."</span></li><br>
					<li>Company Name : <span class=\"jobrs\" id=\"jobrs\">".$row['company_name']."</span></li><br>
					<li>Posted Date : <span class=\"jobrs\" id=\"jobrs\">".$row['posted_date']."</span> Due Date : <span class=\"jobrs\" id=\"jobrs\">".$row['due_date']."</span> </li><br>
					<li>Salary : <span class=\"jobrs\" id=\"jobrs\">".$row['salary']."</span> Location : <span class=\"jobrs\" id=\"jobrs\">".$row['location']."</span></li><br>
					<li>Qualification : <span class=\"jobrs\" id=\"jobrs\">".$row['qualification']."</span></li>
				</ul>
				<form action=\"jobviewfilter.php\" method=\"get\">
				<input type=\"hidden\" name=\"search\"  value=\"".$row['job_id']."\">
				<input type=\"submit\" name=\"searchF\" class=\"jobView\" value=\"view\">
				</form>
		    		</div>";
		 	}
		 }
				}
		}

	if(isset($_POST["submitF"])){

		$location = "%";
		$type = "%";
		$gender = "%";
		$experience = "%";
		$salary = "%";
		$Companies = "%";
		
		if (!empty($_SESSION['searchj'])) {
			$search = $_SESSION['searchj'];
		}
		
		$sql = "SELECT * 
		FROM job a , employer b
		WHERE ";

		 if(!empty($_POST['Gender'])){
		 	$gender = $_POST['Gender'];
		 }
		 if(empty($search)){
		 	$search = "%";
		 }
		
		 if(!empty($_POST['type'])){
		 	$type = $_POST['type'];
		 }
		 if(!empty($_POST['Experience'])){
		 	$experience = $_POST['Experience'];
		 	
		 	if ($experience == "Fresher") {
		 		$sql .= " a.experience = 0 AND ";
		 	}
		 	else if($experience == "1-3 Years"){
		 		$sql .= " a.experience >= '1' AND a.experience <= '3' AND ";
		 	}
		 	else if($experience == "3-5 Years"){
		 		$sql .= " a.experience > '3' AND a.experience <= '5' AND ";
		 	}
		 	else{
		 		$sql .= " a.experience >= '6' AND ";
		 	}

		 }


		 if(!empty($_POST['Salary'])){
		 	$salary = $_POST['Salary'];
		 	if ($salary == "15000") {
		 		$sql .= " a.salary < 15000 AND ";
		 	}
		 	else if($salary == "25000"){
		 		$sql .= " a.salary >= '15000' AND a.salary < '25000' AND ";
		 	}
		 	else if($salary == "50000"){
		 		$sql .= " a.salary >= '25000' AND a.salary < '50000' AND ";
		 	}
		 	else{
		 		$sql .= " a.salary >= '50000' AND ";
		 	}
		 }


		 if(!empty($_POST['Companies'])){
		 	$Companies = $_POST['Companies'];
		 }
		 if(!empty($_POST['Location'])){
		 	$location = $_POST['Location'];
		 }
		
		$sql .= " a.location LIKE '$location' AND a.gender LIKE '$gender' AND a.job_type LIKE '$type' AND b.company_name LIKE '%$Companies%' AND a.job_name LIKE '%$search%' AND a.company_id LIKE b.company_id";

		 $result=mysqli_query($conn, $sql);
		 $res = mysqli_affected_rows($conn);
		 if (mysqli_affected_rows($conn) < 0) {
		 	$res =0;
		 }
		echo "(".$res.")result(s) found.";
		 if (mysqli_affected_rows($conn) > 0) {
		 	while ($row = $result->fetch_assoc()){
		 		echo"<div class=\"sview\">
		    			<img src=\"../photoj/disclaimer.png\" alt=\"company logo\" class=\"searchJL\">
		    	<ul class=\"detailsS\">
					<li>Job Name : <span class=\"jobrs\" id=\"jobrs\">".$row['job_name']."</span></li><br>
					<li>Company Name : <span class=\"jobrs\" id=\"jobrs\">".$row['company_name']."</span></li><br>
					<li>Posted Date : <span class=\"jobrs\" id=\"jobrs\">".$row['posted_date']."</span> Due Date : <span class=\"jobrs\" id=\"jobrs\">".$row['due_date']."</span> </li><br>
					<li>Salary : <span class=\"jobrs\" id=\"jobrs\">".$row['salary']."</span> Location : <span class=\"jobrs\" id=\"jobrs\">".$row['location']."</span></li><br>
					<li>Qualification : <span class=\"jobrs\" id=\"jobrs\">".$row['qualification']."</span></li>
				</ul>
				<form action=\"jobviewfilter.php\" method=\"get\">
				<input type=\"hidden\" name=\"search\"  value=\"".$row['job_id']."\">
				<input type=\"submit\" name=\"searchF\" class=\"jobView\" value=\"view\">
				</form>
		    		</div>";
		 	}
		 }
		 else{
		 	echo"<h3>No Results Found</h3>";
		 }


	}

	

?>


		    	</fieldset>
		    </aside>
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