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
							<input type="Email" class="form-control" placeholder="Email" name="email" autofocus>
					</div>
					<div class="input-group">
						<span class="input-group-addon"></span>
							<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button><br>
					<a href="register.php" >Don't have an account ? Register Here </a>
			</div>
		</form>
		
	</div>
</body>


<?php


  if(isset($_POST['submit']))
  {  
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($connection, "SELECT * from dms_user where user_email='".$email ."' and user_password='".$password."' ");
	$row = mysqli_fetch_array($query);
    if(is_array($row)) {
        echo "<script>window.location.href='home.php';</script>";
      
    }
    else 
    {
		echo "Invalid- Username ID/Password";
      
    }
  }
  ?>
</html>



 