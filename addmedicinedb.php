<?php
	if (isset($_POST['submit'])){
		require_once 'conn.php';
		$description 	= mysqli_real_escape_string($con,$_POST["description"]);
		$genericname 	= mysqli_real_escape_string($con,$_POST["genericname"]);
		$brandname 		= mysqli_real_escape_string($con,$_POST["brandname"]);
		$unitdosage		= mysqli_real_escape_string($con,$_POST["unitdosage"]);
		$cost			= mysqli_real_escape_string($con,$_POST["cost"]);
		$mg= "mg";
		
			if($description==""||$genericname==""||$brandname==""||$unitdosage==""||$cost==""){
				echo "<script>window.location='addmedicine';alert('Please enter all fields');</script>";
			}
			else{
				$sql 	= "INSERT INTO medicine (Description,Generic_name,Brand_name,Unit_dosage,Cost) 
				VALUES ('".$description."','".$genericname."','".$brandname."','".$unitdosage."".$mg."','".$cost."')";
				if(mysqli_query($con,$sql)){
					$msg="New medicine has been added.";
					echo "<script>window.location='addmedicine';alert('$msg');</script>";	
				}else{
	    			echo "Error".mysqli_error($con);
				}
			}
	}
?>