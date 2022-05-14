<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Cookie</title>
</head>

<body>
<!--Create Cookies-->
	<?php
//	this will set a cookie
	setcookie('test', 45, time()+(60*60*24*7));	?>
	
<!--Read Cookies-->

	<?php
//	this will read a cookie
		$var1 = $_COOKIE['test'];
		echo $var1;
	?>
	

</body>
</html>
