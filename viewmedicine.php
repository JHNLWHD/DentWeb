<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Medicine</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/bootstrap/fonts/font-awesome.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  
     <?php include 'headernotactive.php'; ?>
     <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID #</th>
        <th>Description</th>
         <th>Generic Name</th>
        <th>Brand Name</th>
        <th>Unit Dosage</th>
        <th>Cost</th>
        <th>Action</th>
      </tr>
    </thead>
   


<?php
require_once 'conn.php';

$sql= "SELECT id, Description, Generic_name, Brand_name, Unit_dosage, Cost FROM medicine";
$result = mysqli_query($con,$sql);
//$rslt = mysqli_result($result);
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
?>
   <tbody>
      <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['Description']?></td>
        <td><?=$row['Generic_name']?></td>
        <td><?=$row['Brand_name']?></td>
        <td><?=$row['Unit_dosage']?></td>
        <td><?=$row['Cost']?></td>
     
        <td>
          <a href="editmedicine?id=<?=$row['id']?>" >Edit</a> |
          <a href="deletemedicine?id=<?=$row['id']?>"  onclick="return confirm('Are you sure you want to delete?')">Delete</a>
        </td>       
      </tr>
    </tbody>
<?php
  }
}
?>

  </table>
  </div>
  </body>
  </html>