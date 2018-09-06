<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/bootstrap/fonts/font-awesome.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'headernotactive.php'; ?>

        <form  action="appointmentdb" method="POST">
             <div class="bootstrap-iso">
				<div class="container-fluid">
				  	<div class="row">
				   		<div class="col-md-4 col-md-offset-4">
				   		<!--use this grid system to center.-->
				   		<h1>Checkup Details </h1>
				   			<div class="form-group ">
				      			<label class="control-label requiredField" for="patient">
				       			Patient
				      			</label>

				      			<select class="select form-control" id="patientchk" name="patientchk" >

				      			<?php
				      					require_once 'conn.php';
				      					$sql = "SELECT First_name, Middle_name , Last_name FROM Patient ";
				      					$result = mysqli_query($con,$sql);


				      					if(mysqli_num_rows($result) > 0){
				      							while($row = mysqli_fetch_assoc($result)){
				      									echo "<option>";
				        								echo $row['First_name']." ".$row['Middle_name']." ".$row['Last_name'];
				       									echo "</option>";
				       			
	 								 			}
										}
								?>
								</select>

				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label requiredField" for="medicine">
				       			Medicine
				      			</label>
				      			</div>
				      			<div class="form-group ">

				      			<select class="select form-control" id="patientchk" name="patientchk"  >

				      			<?php
				      					require_once 'conn.php';
				      					$sql = "SELECT Generic_name, Brand_name, Cost FROM Medicine ";
				      					$result = mysqli_query($con,$sql);


				      					if(mysqli_num_rows($result) > 0){
				      							while($row = mysqli_fetch_assoc($result)){
				      									echo "<option>";
				        								echo $row['Generic_name']." or ".$row['Brand_name'];
				       									echo "</option>";
				       					}
				       				}
	 								 				
										
								?>
								</select>
				     		</div>	

				     		<div class="form-group ">
				      			<label class="control-label requiredField" for="servicecost">
				       			Service Type
				      			</label>
				      				<select class="select form-control" id="servicechk" name="servicechk"  >

				      			<?php
				      					require_once 'conn.php';
				      					$sql = "SELECT Description FROM Service ";
				      					$result = mysqli_query($con,$sql);


				      					if(mysqli_num_rows($result) > 0){
				      							while($row = mysqli_fetch_assoc($result)){
				      									echo "<option>";
				        								echo $row['Description'];
				       									echo "</option>";
				       					}
				       				}
	 								 				
										
								?>
								</select>
				     		</div>
				     		
				     		<div class="form-group ">
				      			<label class="control-label " for="startdate">
				       			Start Date
				      			</label>
				      			<input class="form-control" id="startdatechk" name="startdatechk" type="text"/>
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label " for="enddate">
				       			End Date
				      			</label>
				      			<input class="form-control" id="enddatechk" name="enddatechk" type="text"/>
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label " for="starttime">
				       			Start Time
				      			</label>
				      			<input class="form-control" id="starttimechk" name="starttimechk" type="text"/>
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label " for="endtime">
				       			End Time
				      			</label>
				      			<input class="form-control" id="endtimechk" name="endtimechk" type="text"/>
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label " for="location">
				       			 Location
				      			</label>
				      			<input class="form-control" id="locationchk" name="locationchk" type="text"/>
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label " for="description">
				       			Description
				      			</label>
				      			<input class="form-control" id="descriptionchk" name="descriptionchk" type="text"/>
				     		</div>
				     		<div class="form-group">
				      			<div>
				       				<button class="btn btn-default " name="submit" type="submit">
				        				Save
				       				</button>
				      			</div>
				     		</div>
				   		</div>
				  	</div>
				</div>
			</div>
		</div>
	</form>
       
	 <?php include 'footer.php'; ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>