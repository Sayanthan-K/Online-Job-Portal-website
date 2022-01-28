<?php
//session start
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobjet";//database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




//add to fav(sayanthan)
if(isset($_POST["addfav"])){
	$job=$_POST['name'];
	$user=$_SESSION['mailP'];

	$sql= "SELECT employee_id FROM employee WHERE mail like '$user'";
			if ($result = mysqli_query($conn, $sql)) {
		  while ($obj = mysqli_fetch_object($result)) {
		  	$id = $obj->employee_id;
		  }
		 }
	 
	
	$sql="INSERT INTO favorite_job (employee_id,job_id) VALUES ('$id','$job')";
	$result=mysqli_query($conn, $sql);
	
	header("Location: ../html/jobAlert.php");
	exit();
	

}

//remove fav(sayanthan)
if(isset($_POST["removefav"])){
	$job=$_POST['name'];
	$user=$_POST['empid'];

	$sql="DELETE FROM favorite_job WHERE employee_id LIKE '$user' AND job_id LIKE '$job'";
	$result=mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0){
		header("Location: ../html/favorite.php");
		exit();
	}
	
	
}

//approve(nirojan)
if(isset($_POST["approve"])){
	$venue = $_POST['venue'];
	$note = $_POST['msg'];
	$date = $_POST['date'];
	$job = $_POST['job'];

	$empid = $_POST['empid'];
	$jobid = $_POST['jobid'];
	$mail = $_SESSION['mailP'];

		$sql= "SELECT company_id FROM employer WHERE email like '$mail'";
		mysqli_query($conn, $sql);
		if ($result = mysqli_query($conn, $sql)) {
		  while ($obj = mysqli_fetch_object($result)) {
		    $id=$obj->company_id;	   
		  }
		}

	$sql = "SELECT * 
	FROM interview 
	WHERE employee_id LIKE '$empid' AND job_id LIKE '$jobid'";
	mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0){
		header("Location: ../html/notiC.php");
		exit();
	}	
	else{
	$sql = "INSERT INTO interview (employee_id,employer_id,interview_date,interview_venue,job_id,notes) VALUES ('$empid','$id','$date','$venue','$jobid','$note')";
	mysqli_query($conn, $sql);

	header("Location: ../html/notiC.php");
	exit();
	}

}
//jobview add fav(niroshani)
if(isset($_POST["addfav1"])){
	$job=$_POST['jid'];
	$user=$_SESSION['mailP'];

	$sql= "SELECT employee_id FROM employee WHERE mail like '$user'";
			if ($result = mysqli_query($conn, $sql)) {
		  while ($obj = mysqli_fetch_object($result)) {
		  	$id = $obj->employee_id;
		  }
		 }


	$sql="INSERT INTO favorite_job (employee_id,job_id) VALUES ('$id','$job')";
	mysqli_query($conn, $sql);

	header("Location: ../html/home.php");
	exit();
	

}

//jobview apply job(niroshani)
if(isset($_POST["applyjob"])){
	$job=$_POST['jid'];
	$user=$_SESSION['mailP'];

	$sql= "SELECT employee_id FROM employee WHERE mail like '$user'";
			if ($result = mysqli_query($conn, $sql)) {
		  while ($obj = mysqli_fetch_object($result)) {
		  	$id = $obj->employee_id;
		  }
		 }

	$sql="INSERT INTO applied_job (employee_id,job_id) VALUES ('$id','$job')";
	mysqli_query($conn, $sql);
	echo"<script type=\"text/javascript\">alert(\"successfully added.\");</script>";
	header("Location: ../html/home.php");
	exit();
	

}

//jobalert apply job(sayanthan)
if(isset($_POST["applyjob1"])){
	$job=$_POST['name'];
	$user=$_SESSION['mailP'];

	$sql= "SELECT employee_id FROM employee WHERE mail like '$user'";
			if ($result = mysqli_query($conn, $sql)) {
		  while ($obj = mysqli_fetch_object($result)) {
		  	$id = $obj->employee_id;
		  }
		 }

	$sql="INSERT INTO applied_job (employee_id,job_id) VALUES ('$id','$job')";
	mysqli_query($conn, $sql);
	
	echo"<script type=\"text/javascript\">alert(\"successfully added.\");</script>";
	header("Location: ../html/profileP.php");
	exit();

	

}

//deletejob(arivaran)
if(isset($_POST["deletejob"])){
	$job=$_POST['job'];


	$sql="DELETE FROM job WHERE job_id LIKE '$job'";
	mysqli_query($conn, $sql);
	if (mysqli_affected_rows($conn) > 0){
	header("Location: ../html/posted.php");
	exit();
	
	}
	else{
		echo"can not delete the job";
	}

}

//delete resume(niroshani)
if(isset($_POST["delresume"])){
	$mail=$_SESSION['mailP'];

	$sql = "UPDATE employee SET resume = NULL WHERE mail LIKE '$mail'";
	mysqli_query($conn, $sql);
	header("Location: ../html/resumeB.html");
	exit();

}


?>