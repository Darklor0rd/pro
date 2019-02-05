<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='get'>
		day:</br><input type="text" name="day"></br>
		month:</br><input type="text" name="month"></br>
		year:</br><input type="text" name="year"></br>
		</br>
		<button type='submit' value="value">sub it</button>
	</form>
	<div style="margin:0 auto;text-align:center">

      <!-- Div align in the middle -->
      <div style="margin-left:auto;margin-right:auto;text-align:center">
            <p>Hello my text is in the middle :-) </p>
      </div>

</div>
	<?php

		if(isset($_GET['day'])&&isset($_GET['month'])&&isset($_GET['year'])){
			$day = htmlentities($_GET['day']);
			$mon = $_GET['month'];
			$year = $_GET['year'];
			if (!empty($day)&&!empty($mon)&&!empty($year)) {
				echo $day.' : '. $mon." : ".$year;
				session_start();
				$_SESSION['name'] = $day.' : '. $mon." : ".$year;
				header('Location: user.php');
			}
			else{
				echo "Fill the fields";
			}
		}
	?>

</body>
</html>