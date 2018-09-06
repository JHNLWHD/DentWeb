<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/addpatient.css">
    <link rel="stylesheet" href="assets/bootstrap/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
</head>

<body>
	<?php include 'headernotactive.php'; ?>
      
        <form  action="addpatientdb" method="POST">
            <h1> Register a Patient </h1>
            
             <div class="bootstrap-iso">
				<div class="container-fluid">
				  	<div class="row">
				   		<div class="col-md-4 col-md-offset-4">
				   		<!--use this grid system to center.-->
				     		<div class="form-group">
				      			<label class="control-label requiredField" for="firstname">
				       				First Name
				      				<span class="asteriskField">
				        			*
				      				</span>
				      			</label>
				      			<input class="form-control" id="firstname" name="firstname" type="text"/>
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label " for="middlename">
				       			Middle Name
				      			</label>
				      			<input class="form-control" id="middlename" name="middlename" type="text"/>
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label requiredField" for="name2">
				       			Last Name
				       				<span class="asteriskField">
				        			*
				       				</span>
				      			</label>
				      			<input class="form-control" id="lastname" name="lastname" type="text"/>
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label requiredField" for="gender">
				       			Select your Gender
				       				<span class="asteriskField">
				        			*
				       				</span>
				      			</label>
				      			<select class="select form-control" id="gender" name="gender">
				       				<option value="Male">
				        				Male
				       				</option>
				       				<option value="Female">
				        				Female
				       				</option>
				      			</select>
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label requiredField" for="email">
				       			Email
				       				<span class="asteriskField">
								     *
								    </span>
				      			</label>
				      			<input class="form-control" id="email" name="email" type="email"  />
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label " for="address">
				       			Address
				      			</label>
				      			<input class="form-control" id="address" name="address" type="text"/>
				     		</div>
				     		<div class="form-group">
				      			<div>
				       				<button class="btn btn-default " name="submit" type="submit" onclick="return confirm('Are you sure you want to save?')">
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