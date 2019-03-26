<?php
    include 'app/Classes/database.php';
?>

	<!-- Slider Section Start Here -->
	
	

<!-- Jumbotron -->

<?php 
	
	if(isset($_POST['btn'])){
		$user = new Database();
		$user->saveUserData($_POST);
	}
?>

	<!-- Form -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white sticky-top shadow">

        <a class="navbar-brand" href="#">Company Name</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto list-unstyled">

                <li class="nav-item mr-2 active">
                    <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        House Rent
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Mess</a>
                        <a class="dropdown-item" href="#">Flat</a>
                </li>

                <li class="nav-item mr-2">
                    <a class="nav-link text-white" href="#">Tution</a>
                </li>


            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border border-gray-dark rounded text-white" href="signup.php">Sign Up</a>
                </li>
            </ul>

        </div>

    </nav>

    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-title">
                        <h3 class="text-center">Sign Up</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="name">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="email">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="phone">Phone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="phone" id="phone">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="password">Password</label>
                                <div class="col-md-9">
                                    <input type="Password" class="form-control" name="password" id="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="cPassword">Confirm Password</label>
                                <div class="col-md-9">
                                    <input type="Password" class="form-control" name="cPassword" id="cPassword">
                                </div>
                            </div>



                            <div class="form-group row">
                                <div class="offset-3 col-md-9">
                                    <button type="submit" class="btn btn-success btn-block" name="btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>