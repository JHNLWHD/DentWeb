<!DOCTYPE html>
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
  
     <?php include 'headeractive.php'; ?>
    <h1 class="head" id="dent1">  Welcome to DentWeb! </h1>
    <h2 class="text-center">What do you want to do?</h2>
    <a class="btn btn-primary btn-block add" role="button" href="addpatient" id="add">Add Patient</a>
    <a class="btn btn-primary btn-block record" role="button" href="viewpatient" id="rec">View Patient Records</a>
    <a class="btn btn-primary btn-block addmedicine" role="button" href="addmedicine" id="chckup">Add Medicine</a>
    <a class="btn btn-primary btn-block record" role="button" href="viewmedicine" id="rec">View Medicine Records</a>


    <?php include 'footer.php'; ?>
    
</body>

</html>