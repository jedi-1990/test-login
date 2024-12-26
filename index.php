<?php
ob_start();
session_start();

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

if(isset($_SESSION["login"])){ $login = $_SESSION["login"]; }else{ $login = '0'; }

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<!-- META DATA -->
	<title>Login</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="stylesheet" href="css/custom/style.min.css?no-cache=<?php echo time(); ?>" type="text/css" />
</head>
<body>

	<?php if($login=="0"){ ?>
	<div class="login">
		<form onsubmit="return login();">
			<div class="input">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" />
			</div>
			<div class="input">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" />
			</div>
			<p class="error">იმეილი ან პაროლი არასწორია</p>
			<button type="submit">Login</button>	
		</form>
	</div>
	<?php }else{ ?>
		<div class="logout">
			<button type="button" class="btn_logout">Logout</button>	
		</div>
	<?php } ?>

	<script src="js/jquery-3.7.1.min.js" ></script>
	<script src="js/custom.js" ></script>
	<noscript>Your browser does not support JavaScript!</noscript>
</body>
</html>
