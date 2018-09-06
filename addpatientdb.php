<?php
	if (isset($_POST['submit'])){
		require_once 'conn.php';
		$firstname 	= mysqli_real_escape_string($con,$_POST['firstname']);
		$middlename = mysqli_real_escape_string($con,$_POST['middlename']);
		$lastname 	= mysqli_real_escape_string($con,$_POST['lastname']);
		$gender		= mysqli_real_escape_string($con,$_POST['gender']);
		$email		= mysqli_real_escape_string($con,$_POST['email']);
		$address	= mysqli_real_escape_string($con,$_POST['address']);
		

		if($firstname==" "||$lastname==" "||$email==" "||$gender==" "){
				echo "<script>window.location='addpatient';alert('Please enter all fields');</script>";
			}
			else{

			
				$sql 	= "INSERT INTO patient (First_name, Middle_name, Last_name, Gender, Email, Address, Created_date) 
				VALUES ('".$firstname."','".$middlename."','".$lastname."','".$gender."','".$email."','".$address."','".date('Y-m-d H:i:s')."')";
				if(mysqli_query($con,$sql)){
					$msg="New patient has been added.";
					echo "<script>window.location='addpatient';alert('$msg');</script>";	
				}else{
	    			echo "Error".mysqli_error($con);
				}
			}
	}
?>