<!DOCTYPE html>
<html>
<head>
	<title>User Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-left ">
			<h1>Login Here</h1>
			<form action="validation.php" method="post">
				<div class="form-group">
					<label><h5>Username</h5></label>
					<input type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">
					<label><h5>Password</h5></label>
					<input type="text" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary"> Login </button>
			</form>
		</div>
		<br />
		<div class="col-md-6 login-right">
			<h1>Register Here</h1>
			<form action="registration.php" method="post">
				<div class="form-group">
					<label><h5>Username</h5></label>
					<input type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">
					<label><h5>Password</h5></label>
					<input type="text" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>