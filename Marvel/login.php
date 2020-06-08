<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
<link href="css/loginmain.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="log">
	<div class="content1">
		<h2>Sign In Form</h2>
		<form action="loginconfig.php" method="post">
			<input name="username" id="username" type="text" placeholder="UserName">
			<input name="password" id="password" type="text" placeholder="PassWord">
			<div class="button-row">
				<input type="submit" class="sign-in" value="Sign In">
				<div class="clear"></div>
			</div>
		</form>
	</div>
	<div class="content2">
		<h2>Sign Up Form</h2>
		<form action="registerconfig.php" method="post">
			<input name="username" id="name" type="text" placeholder="UserName">
			<input name="email" id="email" type="email" placeholder="Email">
			<input name="password" id="password2" type="text" placeholder="PassWord">
			<div class="button-row">
				<input type="submit" class="sign-in" value="Sign Up">
			</div>
		</form>
	</div>
	<div class="clear"></div>
</div>

</body>
</html>
