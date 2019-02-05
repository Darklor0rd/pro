<?php

?>

<!DOCTYPE html> 
<html>
<head>
	<title>test page</title>
</head>
<body>
	<?php
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			$ip_address = $_SERVER['HTTP_CLIENT_IP'];
			echo $ip_address;
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
			echo $ip_address;
		}
		else{
			$ip_address = $_SERVER['REMOTE_ADDR'];
			echo $ip_address;
		}
		print_r( get_browser(null, true));
		echo $_SERVER['HTTP_USER_AGENT'];
		

		
	?>


</body>
</html>