<?php 

include 'core.php';

// if(isset($_SESSION['uname']) && isset($_SESSION['POST'])){
// 		header("Location: {$home_url}hod_panel.php");

// 	// else if(isset($_SESSION['POST']))
// 	// 	header("Location: {$home_url}lect.php");

// 	// else if(isset($_SESSION['POST']))
// 	// 	header("Location: {$home_url}Hod_panel.php");
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple Login Form UI Design</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section class="main-content">
		<div class="container">
			<div class="d-none d-sm-none d-md-block">
				<h1 class="text-center text-uppercase"> Login Form</h1>
				<br>
				<br>
			</div>

			<div class="login-card d-flex rounded-lg overflow-hidden bg-white">
				<div class="login-message d-none d-sm-none d-md-flex flex-column justify-content-center p-5">
					<img src="https://cdn.iconscout.com/icon/free/png-512/best-employee-23-1117676.png" alt="Welcome" class="img-fluid mb-3">
					<h2>Welcome back</h2>
					<p>Login into Employee Managment System!</p>
				</div>
				<div class="login-body">
					<div class="login-body-wrapper mx-auto">
						<h3 class="text-center text-uppercase mb-3 text-primary">Login</h3>
						<form action="validate.php" method="POST">
							<?php  
							if(isset($_SESSION['error'])) {
								
                            echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                             unset($_SESSION['error']);   
                        }

                        ?>
						<div class="form-group" >
							<label for="email">Email</label>
							<input type="text" class="form-control form-control-lg" name="uname" id="email" aria-describedby="helpId" placeholder="Enter Email id">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control form-control-lg" name="pass" id="password" aria-describedby="helpId" placeholder="Enter your Password">
							<a href="#!">Forgot password?</a>
						</div>
						<button class="btn btn-primary btn-block btn-lg">Login</button>
					</form>
						<p class="text-muted text-center">New to our platform? <a href="#!">Signup</a></p>
						<div class="or-divider rounded-circle bg-white shadow d-flex justify-content-center align-items-center mx-auto mb-3">Or</div>
						<div class="row">
							<div class="col-sm-6">
								<button class="btn btn-facebook btn-block btn-lg my-1">Facebook</button>
							</div>
							<div class="col-sm-6">
								<button class="btn btn-google btn-block btn-lg my-1">Google</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
</body>
</html>