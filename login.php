<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/login.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
	<title>main page</title>
</head>
<body>




<?php
	session_start();
	
?>

<?php echo "<form method='post' action='user.php'>";?>
<div class="row">
	<div class="column side">
	

      <!-- Div align in the middle -->
      <div style="margin-left:auto;margin-right:auto;text-align:center;font-family: arial; border-radius: 40px;">
            <img src="css/pics/user_.png" class="user_img" style="height: 50px; opacity: 0.9;margin-bottom: 10px;">
      </div>


    <label class="lbls">Username</label>
    <br>
	<input type="text" name="username" placeholder="Username" required class="userI">
	<br>
	<br>
	<label class="lbls">Password</label>
	<br>
<?php
	echo '
	<input type="password" name="pass" placeholder="Password" class=" passI" required>
	<br>
	<br>
	'
?>
	<button type="submit" class="logbtn">Login</button>
	</div>
</div>
</form>

</body>
</html>