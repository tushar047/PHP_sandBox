<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Functions</title>
</head>

<body>
	<b>Functions</b>
	<br/><br/>
	<?php
		function sayHello(){
			echo "<br/> Hello"; 
		}
		
		sayHello();
		
		function say_hello($name){
			echo "<br/> Hello " . $name;
		}
		
		say_hello("Buddy");
		
		function Table($n){
			for($i = 1; $i <= 10; $i++){
			echo "<br/> " . $n . "x" . $i . "=" . ($n*$i);	
			}
		}
		echo "<br/> ";
		$n = 5;
		Table($n);
	?>
	
	<?php
	echo "<br/>";
//	using local variable
		function A_op($val1, $val2){
			$sum = $val1 + $val2;
			$diff = $val1 - $val2;
			$result = array($sum, $diff);
			return $result;
		}
		$sol = A_op(5,2);
		echo "<br/> sum: " . $sol[0];
		echo "<br/> diff: " . $sol[1];
	?>
	
	<br/><br/>
	
	<?php
//	using global variable
		$val = 10;
		echo "<br/>" . "val = {$val}";
		function myFunc($i) {
			global $val;
			$val = $i;
			return $val;
		}
		
		myFunc(20);
		echo "<br/>" . "val = {$val}";
	?>

	<br/><br/>
	
	<?php
//	using defaut value

		function paint($room="Bedroom", $color="Cyan"){
			echo "<br/> The {$room} is painted {$color}.";
		}
		
		paint("Hall","yellow");
		paint();
		paint("Office");
		
	?>

</body>
</html>
