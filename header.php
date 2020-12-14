<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel ="stylesheet" href="style.css">
</head>
<body>

	<header>
		<nav class="nav-header-main">
			<a class="header-logo" href="index.php">
				<img src="img/cuff.png" alt="logo">
			</a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php">Portfolio</a></li>
				<li><a href="index.php">About me</a></li>
				<li><a href="index.php">Contact</a></li>
			</ul>
		</nav>
			<div class="header-login">
				<form action = "includes/login.inc.php" method="post">
					<input type="text"name="mailuid"placeholder="Username/Email...">
					<input type="password"name="pwd"placeholder="Password...">
					<button type="submit" name="login-submit">Login</button>
				</form> 
				<a href="signup.php">Signup</a>
				<form action = "includes/logout.inc.php" method="post">
					<button type="submit" name="login-submit">Logout</button>
				</form>

			</div>
	</header>

