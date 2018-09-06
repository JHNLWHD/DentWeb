<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Medicine</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/addpatient.css">
    <link rel="stylesheet" href="assets/bootstrap/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
</head>
<body>
	<?php include 'headernotactive.php'; ?>


 <form  action="editmedicinedb" method="POST">
  <?php include 'editmedicinedb.php' ?>
            <h1> Edit Medicine </h1>
            
             <div class="bootstrap-iso">
				<div class="container-fluid">
				  	<div class="row">
				   		<div class="col-md-4 col-md-offset-4">
				   		<!--use this grid system to center.-->
				     		<div class="form-group">
				      			<label class="control-label requiredField" for="description">
				       				Description
				      				<span class="asteriskField">
				        			*
				      				</span>
				      			</label>
				      			<input class="form-control" id="id" name="id" type="hidden" value="<?=$id?>"/>
				      			<input class="form-control" id="description" name="description" type="text" value="<?=$description?>"/>
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label requiredField" for="genericname">
				       			Generic Name
				       			<span class="asteriskField">
				        		*
				      			</span>
				      			</label>
				      			<input class="form-control" id="genericname" name="genericname" type="text" value="<?=$genericname?>"/>
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label requiredField" for="brandname">
				       			Brand Name
				       				<span class="asteriskField">
				        			*
				       				</span>
				      			</label>
				      			<input class="form-control" id="brandname" name="brandname" type="text" value="<?=$brandname?>"/>
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label requiredField" for="unitdosage">
				       			Unit Dosage
				       				<span class="asteriskField">
				        			*
				       				</span>
				      			</label>
				      			<input class="form-control" id="unitdosage" name="unitdosage" type="text"  pattern=".{1,10}" required title="Either 1 to 4 chars" onkeydown="return ( event.ctrlKey || event.altKey 
			                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
			                    || (95<event.keyCode && event.keyCode<106)
			                    || (event.keyCode==8) || (event.keyCode==9) 
			                    || (event.keyCode>34 && event.keyCode<40) 
			                    || (event.keyCode==46) )" value="<?=$unitdosage?>"/>
				     		</div>
				     		<div class="form-group ">
				      			<label class="control-label requiredField" for="cost">
				       			Cost
				       				<span class="asteriskField">
				        			*
				       				</span>
				      			</label>
				      			<input class="form-control" id="cost" name="cost" type="text"  pattern=".{1,9}" required title="Either 1 to 9 chars" onkeydown="return ( event.ctrlKey || event.altKey 
			                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
			                    || (95<event.keyCode && event.keyCode<106)
			                    || (event.keyCode==8) || (event.keyCode==9) 
			                    || (event.keyCode>34 && event.keyCode<40) 
			                    || (event.keyCode==46) )" value="<?=$cost?>"/>
				     		</div>
				     		<div class="form-group">
				      			<div>
				       				<button class="btn btn-default " name="submit" type="submit" onclick="return confirm('Are you sure you want to update?');">
				        				Update
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