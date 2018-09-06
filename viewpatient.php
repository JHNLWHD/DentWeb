<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patient</title>
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
        <th>First Name</th>
         <th>Middle Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Address</th>
        <th>Created date</th>
        <th>Action</th>
      </tr>
    </thead>
   


<?php
require_once 'conn.php';

$sql= "SELECT id, First_name, Middle_name, Last_name, Gender, Email, Address, Created_date FROM patient";
$result = mysqli_query($con,$sql);
//$rslt = mysqli_result($result);
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
?>
   <tbody>
      <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['First_name']?></td>
        <td><?=$row['Middle_name']?></td>
        <td><?=$row['Last_name']?></td>
        <td><?=$row['Gender']?></td>
        <td><?=$row['Email']?></td>
        <td><?=$row['Address']?></td>
        <td><?=$row['Created_date']?></td> 
        <td>
          <a href="editpatient?id=<?=$row['id']?>" >Edit</a> |
          <a href="deletepatient?id=<?=$row['id']?>"  onclick="return confirm('Are you sure you want to delete?')">Delete</a>
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