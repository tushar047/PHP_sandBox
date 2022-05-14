<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php
//	Starting a session.
	session_start();
?>
<html>
<head>
	<title>Sessions</title>
</head>

<body>
	
	<?php
		$_SESSION['name'] = "Tushar";
		echo $_SESSION['name'] . "<br/>";
	?>

	<?php
//	checking session status.
		$var = session_status();
		echo $var;
	?>

</body>
</html>