<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body id="bg_colour">
	
		<div class="form_page">
		<form action="output.php" method="post" onsubmit=" return validation();">
			<h1>Login Page</h1>
			<input type="text" name="name" placeholder="Enter your name" id="name">
			<br>
			<br>
			<input type="password" name="password" placeholder="Enter your password" id="password">
			<br>
			<br>
			<input type="email" name="email" placeholder="Enter your email" id="email">
			<br>
			<br>
			<input type="text" name="phonenumber" placeholder="Eneter your phonenumber" id="phonenumber">
			<br>
			<br>
			<input type="number" name="age" placeholder="Eneter your Age" id="age">
			<br>
			<br>
			<button type="Submit" name="Submit">Submit</button>

		</form>
	</div>
	
	<script src="./script.js"></script>
</body>
</html>