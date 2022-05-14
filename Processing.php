<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Form Output</title>
</head>

<body>

	<?php
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		echo "{$username} : {$password}";
	?>

</body>
</html>
