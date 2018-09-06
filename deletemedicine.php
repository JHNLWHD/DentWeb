<?php
require_once 'conn.php';

if(isset($_GET['id'])){
	$sql = "DELETE FROM medicine WHERE ID =".$_GET['id'];
	if(mysqli_query($con,$sql)){
		$msg="Medicine has been deleted.";
		echo "<script>window.location='viewmedicine';alert('$msg');</script>";
		}else{
			echo "Error".mysqli_error($con);
		}
	}
	
?>