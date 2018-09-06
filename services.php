<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/services.css">
    <link rel="stylesheet" href="assets/bootstrap/fonts/font-awesome.min.css">
</head>

<body>

<?php include 'headerservices.php'; ?>

    <div class="thumbnail">
        <h3 class="text-center">Extraction </h3>
        <p class="text-center">Price = 300.00</p><center><img src="assets/img/understanding-wisdom-tooth-extraction.jpg"></center>
        <div class="caption"></div>
            <div class="thumbnail">
                <h3 class="text-nowrap text-center">Cleaning </h3>
                <p class="text-center">Price = 150.00</p><img src="assets/img/Teeth-Cleaning-Miami-2.jpg">
                <div class="caption"></div>
            </div>
            <div class="thumbnail">
                <h3 class="text-center">Teeth Whitening</h3>
                <p class="text-center">Price = 400.00</p><img src="assets/img/teeth-whitening.jpg"></div>
            <div class="thumbnail">
                <h3 class="text-center">Filling </h3>
                <p class="text-center">Price = 300.00</p><img src="assets/img/Fillings_main.jpg">
                <div class="caption"></div>
            </div>
            <div class="thumbnail">
                <h3 class="text-center">Tooth implant</h3>
                <p class="text-center">Price = 700</p><img src="assets/img/480753457.jpg"></div>
            <div class="thumbnail">
                <h3 class="text-center">X-ray </h3>
                <p class="text-center">Price = 500.00</p><img src="assets/img/04a.jpg"></div>
        
       
    </div>
        <!--Modal Form--> 
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title">Login</h5>
                </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="loginForm" action="login" method="POST" class="form-horizontal" >
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Username</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="username" />
                        </div>
                    </div>

             <div class="form-group">
                <label class="col-xs-3 control-label">Password</label>
                <div class="col-xs-5">
                    <input type="password" class="form-control" name="password" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-5 col-xs-offset-3">
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <?php include 'footer.php';?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>