<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php
	// Create a database Connection
	$conn = mysqli_connect("localhost","root","");
	if (!$conn){
		die("Database Connection Failed" . mysqli_error());
	}
	
	// Select DataBase
	$db_select = mysqli_select_db($conn, "tushar");
	if (!$db_select){
		die("Database Connection Failed" . mysqli_error());
	}
?>
<html>
<head>
	<title>DataBases</title>
</head>

<body>

	<?php
		// perform db query
		$result = mysqli_query($conn, "select * from subjects");
		
		// use returned data
		while ($row = mysqli_fetch_array($result)){
			echo $row["menu_name"]." ".$row["position"]."<br/>";
		}
		
	?>

</body>
</html>
<?php
	// close connection
	mysqli_close($conn);
?>