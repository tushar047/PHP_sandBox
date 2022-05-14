<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>First Page</title>
</head>

<body>
	<?php
		$url_page = 'SecondPage.php';
		$id = 10;
		$name = "Tushar";
		$param1 = 'this is a String';
		$param2 = '"bad"<>Characters/';
		$link= "<Click> & you'll see";
	?>
	
	<?php
	//	this gives you a clean link to use
		$url = "http://localhost/php_sandbox/";
		$url .= rawurldecode($url_page);
		$url .= "?id=" . urlencode($id);
		$url .= "&name=" . urlencode($name);
		$url .= "&param1=" . urlencode($param1);
		$url .= "&param2=" . urlencode($param2);
		
	/* 	htmlspecialchars escapes any html that might do bad things to your
		html page*/
	?>
	
	<a href="<?php echo htmlspecialchars($url); ?>">
		<?php
			echo htmlspecialchars($link);
		?>
	</a>

</body>
</html>
