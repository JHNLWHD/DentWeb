<?php
require_once 'conn.php';

if(isset($_GET['id'])){
	$sql = "DELETE FROM patient WHERE ID =".$_GET['id'];
	if(mysqli_query($con,$sql)){
		$msg="Patient has been deleted.";
		echo "<script>window.location='viewpatient';alert('$msg');</script>";
		}else{
			echo "Error".mysqli_error($con);
		}
	}
	
?>