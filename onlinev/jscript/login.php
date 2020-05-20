<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="admin.png"/>
		<form action="login_action.php" method="post" id="myform" >
		<div class="form-input">
		<input type="text" name="username" placeholder="Enter the User Name"/>	
		</div>
		<div class="form-input">
		<input type="password" name="password" placeholder="password"/>
		</div>
		<input type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>
<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>