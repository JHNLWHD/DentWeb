<?php
	if (isset($_POST['submit'])){
		require_once 'conn.php';
		$patient 			= mysqli_real_escape_string($con,$_POST["patientchk"]);
		$medicine 			= mysqli_real_escape_string($con,$_POST["medchk"]);
		$servicetype 		= mysqli_real_escape_string($con,$_POST["servicechk"]);
		$startdate			= mysqli_real_escape_string($con,$_POST["startdatechk"]);
		$enddate			= mysqli_real_escape_string($con,$_POST["enddatechk"]);
		$starttime			= mysqli_real_escape_string($con,$_POST["starttimechk"]);
		$endtime			= mysqli_real_escape_string($con,$_POST["endtimechk"]);
		$location			= mysqli_real_escape_string($con,$_POST["locationchk"]);
		$description		= mysqli_real_escape_string($con,$_POST["descriptionchk"]);
		
			if($description==""||$location==""||$endtime==""||$starttime==""||$enddate==""||$startdate==""||$servicetype==""||$medicine==""||$patient==""){
				echo "<script>window.location='checkup';alert('Please enter all fields');</script>";
			}
			else{
				$sql 	= "INSERT INTO appointment (Dentist_ID,Medicine_ID,Patient_ID,) 
				VALUES ('".$description."','".$genericname."','".$brandname."','".$unitdosage."".$mg."','".$cost."')";
				if(mysqli_query($con,$sql)){
					$msg="New medicine has been added.";
					echo "<script>window.location='checkup';alert('$msg');</script>";	
				}else{
	    			echo "Error".mysqli_error($con);
				}
			}
	}
?>