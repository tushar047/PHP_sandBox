<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Control Structures</title>
</head>

<body>
	
	<?php
	
		$a=10; $b=5;
		
		if ($a >= $b){
			echo "<br/> a is larger than b";
		}
		
		if ($a == $b){
			echo "<br/> a is equal to b";
		} else {
			echo "<br/> a is not equal to than b";

		}
		
		if ($a < $b){
			echo "<br/> a is smaller than b";
		} elseif ($a > $b){
			echo "<br/> a is greater than b";
		} else {
			echo "<br/> a is equal to b";
		}
	?>
	
	<br/><br/>
	<b>Logical Operators</b>
	<br/>
	
	<?php
	$c=10; $d=5;
		if (($a == $b) &&  ($c == $d)){
			echo "<br/> a is equal to b and";
			echo " c is equal to d";
		} elseif (($a == $b) || ($a == $c)){
			echo "<br/> a is equal to c";
		}
		
		if (($a == $c) &&  ($b == $d)){
			echo "<br/> a is equal to c and";
			echo " b is equal to d";
		} else {
			echo "<br/> none of them are equal.";
		}
	?>

	<br/><br/>
	<b>Switch</b>
	<br/>
	
	<?php
		$i = 2;
		switch ($i){
			case 0:
				echo "<br/> i = 0";
				break;
			case 1:
				echo "<br/> i = 1";
				break;
			case 2:
				echo "<br/> i = 2";
				break;
			case 3:
				echo "<br/> i = 3";
				break;
			default:
				echo "<br/> i is greater than 3";
				break;
			}
	?>
	
</body>
</html>
