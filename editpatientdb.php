<?php
require_once 'conn.php';
	if(isset($_POST['submit'])){

		$firstnamedb 	= mysqli_real_escape_string($con,$_POST['firstname']);
		$middlenamedb 	= mysqli_real_escape_string($con,$_POST['middlename']);
		$lastnamedb 	= mysqli_real_escape_string($con,$_POST['lastname']);
		$genderdb		= mysqli_real_escape_string($con,$_POST['gender']);
		$emaildb		= mysqli_real_escape_string($con,$_POST['email']);
		$addressdb		= mysqli_real_escape_string($con,$_POST['address']);
		$sql = "UPDATE patient SET First_name = '".$firstnamedb."', 
		Middle_name = '".$middlenamedb."', 
		Last_name = '".$lastnamedb."', 
		Gender = '".$genderdb."', 
		Email = '".$emaildb."', 
		Address = '".$addressdb."'
		
		WHERE ID = '".$_POST['id']."'
		";
		if(mysqli_query($con,$sql)){
			$msg="Patient has been updated.";
			echo "<script>window.location='viewpatient';alert('$msg');</script>";
		}else{
			echo "Error".mysqli_error($con);
		}
	}

	$id='';
	$firstname='';
	$middlename='';
	$lastname='';
	$gender='';
	$email='';
	$address='';
	if(isset($_GET['id'])){
		$sql= "SELECT ID, First_name, Middle_name, Last_name, Gender, Email, Address FROM patient WHERE ID=".$_GET['id'];
		$result= mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$id = $row['ID'];
			$firstname = $row['First_name'];
			$middlename = $row['Middle_name'];
			$lastname = $row['Last_name'];
			$gender = $row['Gender'];
			$email = $row['Email'];
			$address = $row['Address'];
		}
	}

?>