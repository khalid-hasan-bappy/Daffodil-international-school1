<?php
session_start();
if(isset($_SESSION['user']))
{
    header('location:home.php');
}
 else {
    ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<div class="content">
		<header class="col-md-12">
			<div class="page-title container text-center">
				<h1>Daffodil International School</h1>
			</div>
		</header>
		<main class="col-md-12">
			<div class="log-panel col-md-12">
				<div class="login-form">
                                    <p style="color: white">Usernam: bappy<br>Password:bappy</p>
                                    <form action="lib/process_login.php" method="POST">
						<h2>admin</h2>
                                                
                                                <label for="user">Username </label><input type="text" id="user" name="user_name"/><br>
                                                <label for="pass">Password </label><input type="password" id="pass" name="password"/><br>
						<div class="sub">
                                                    <a href="#">Forgote password?</a> <input type="submit" name="login_submit" value="Log In >>" />
						</div>
					</form>
				</div>
			</div>
		</main>
	</div>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
 }
?>