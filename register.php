  <?php
include_once("db.php");
  ob_start();
  error_reporting(0);
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login Page</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  
</head>

<body class="login-img3-body">
	<div class="container">
					

		<form method='post' class="login-form" >
			<div class="login-wrap">
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input type="text" class="form-control" placeholder="User Name" name="username" autofocus>
					</div>
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input type="number" class="form-control" placeholder="Phone Number" name="phnNo">
					</div>
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Register</button><br>
					<a href="login.php" type="submit" name="submit">Already have an account ? Login Here </a>
			</div>
		</form>
		
	</div>
</body>


<?php


  if(isset($_POST['submit']))
  {  
    	$username = $_POST['username'];
	$email = $_POST['email'];
	$phnNo = $_POST['phnNo'];
    	$password = $_POST['password'];
    	$query = ("INSERT INTO `dms_user` (`user_name`,`user_email`,`user_phnNo`,`user_password`)
 				VALUES ('".$username."','".$email."','".$phnNo."','".$password."')");
	$runQuery = mysqli_query($connection,$query); 
					
			
        // echo $query;
           echo "<script>window.location.href='login.php';</script>";
			
	
  }
  ?>
</html>



 