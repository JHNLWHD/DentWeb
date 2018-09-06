<?php
require_once "conn.php" ;

	if(isset($_POST['submit'])){

		/*$descriptiondb 	= mysqli_real_escape_string($con,$_POST['description']);
		$genericnamedb 	= mysqli_real_escape_string($con,$_POST['genericname']);
		$brandnamedb 	= mysqli_real_escape_string($con,$_POST['brandname']);
		$unitdosagedb	= mysqli_real_escape_string($con,$_POST['unitdosage']);
		$costdb			= mysqli_real_escape_string($con,$_POST['cost']);*/



		$descriptiondb 	= $_POST['description'];
		$genericnamedb 	= $_POST['genericname'];
		$brandnamedb 	= $_POST['brandname'];
		$unitdosagedb	= $_POST['unitdosage'];
		$costdb			= $_POST['cost'];
		$iddb = $_POST['id'];

		$sql = "UPDATE medicine SET Description = '".$descriptiondb."' , Generic_name = '".$genericnamedb."' , Brand_name = '".$brandnamedb."', 
		Unit_dosage = '".$unitdosagedb."' , 
		Cost = '".$costdb."'
		WHERE ID = '".$iddb."'
		";
		if(mysqli_query($con,$sql)){
			$msg="Medicine has been updated.";
			echo "<script>window.location='viewmedicine';alert('$msg');</script>";
		}else{
			echo "Error".mysqli_error($con);
		}
	}

	$id='';
	$description='';
	$genericname='';
	$brandname='';
	$unitdosage='';
	$cost='';
	if(isset($_GET['id'])){
		$sql= "SELECT ID, Description, Generic_name, Brand_name, Unit_dosage, Cost FROM medicine WHERE ID=".$_GET['id'];
		$result= mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$id = $row['ID'];
			$description= $row['Description'];
			$genericname = $row['Generic_name'];
			$brandname = $row['Brand_name'];
			$unitdosage = $row['Unit_dosage'];
			$cost = $row['Cost'];
		}
	}

?>