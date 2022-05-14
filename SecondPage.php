<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Second Page</title>
</head>

<body>

	<?php
	
		$id = $_GET['id'];
		$name = urldecode($_GET['name']);
		echo "<br/><strong> id: " . $id . ", name: {$name}<strong/><br/>";
		
		$str1 = "Tushar Talreja";
		echo urlencode($str1);
		echo "<br/>";
		echo rawurlencode($str1);
		
	?>

</body>
</html>
