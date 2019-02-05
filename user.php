<?php
	function notLogged()
	{
		echo "
			<script>var body 	=document.getElementsByTagName('BODY');

				for (var i = body.length - 1; i >= 0; i--) {
			body[i].style.backgroundColor = '#252525';
		}
			</script>
			<h1 style='font-family:monospace;font-weight:normal;
    margin:120px auto;text-align:center; color:#fff;'>Please Login To Access This Page</h1>
		";
	}
	function Logged($username,$password,$hash)
	{
		echo '
			<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<title>test</title>
</head>
<body>
	<div class="right-tab">
		<li>
		<a href="#" class="active">My Profile</a>
		<a href="#">My Services</a>
		<a href="#">Log Out</a>
	</li>
	</div>
	<div class="main">
		
	<h1 style="color: white; text-align: center;">Welcome</h1>'.
	'<p> your username is : ' . $username . ' </p>'.
	'<p> your password is : ' . $password . ' </p>'.
	'<p> your hash is : ' . $hash . ' </p>'
		
	.'</div>

</body>
</html>
	';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>user</title>
</head>
<body>
	<?php
	try{
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (!isset($_COOKIE['PHPSESSID'])or strlen($_POST['username']) == 0 or strlen($_POST['pass']) == 0) {
		echo "<h1>please login</h1>";
			}
	else{
	$user = $_POST['username'];
	$pass = $_POST['pass'];
	
	$_SESSION["name"] = $user;
	$_SESSION["hash"] = hash("sha256", $pass);
	
	Logged($_POST["username"],$_POST["pass"],$_SESSION["hash"]);
	}
	}
	else{
		notLogged();
	}
}
	catch(Exception $e){
		echo "error";
	}
	?>
</body>
</html>