<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Loops</title>
</head>

<body>
	<b>Loops</b>
	<br/>
	<b>While</b>
	<br/>

	<?php
		$i = 0;
		while ($i <= 2){
			echo "<br/>" . $i;
			$i++;
		}
	?>
	
	<br/>
	<br/>
	<b>do while</b>
	<br/>
	
	<?php
		$i = 0;
		do{
			if($i % 2 == 0){
				echo "<br/>" . $i;
			}
			$i++;
		} while($i <= 10);
		echo "<br/> i = " . $i;
	?>

	<br/>
	<br/>
	<b>for</b>
	<br/>
	
	<?php
		for($i = 1; $i < 11; $i++){
			echo "<br/> 2x" . $i . " = " . ($i*2);
		}
	?>

	<br/>
	<br/>
	<b>for each</b>
	<br/>
	
	<?php
	echo "<br/>";
		$ages = array(2, 5, 12, 10, 6);
		foreach($ages as $age){
			echo $age . ", ";
		}
	echo "<br/>";
	
		foreach($ages as $position => $age){
			echo  "<br/> " . $position . ": " . $age;
		}
	echo "<br/>";
	
		$ages = array(21 => "tushar", 23 => "pratik", 22 => "akshata");
		foreach($ages as $age => $name){
			echo "<br/>age: " . $age . "; name: " . $name;
		}
	echo "<br/>";
		
		$people = array("m" => "Ashish", "f" => "Sneha", "m" => "Tushar", "f" => "Akshata");
		foreach($people as $gender => $name){
			if ($gender == "m"){
				echo "<br/> male: " . $name;
			} else {
				echo "<br/> female: " . $name;
			}
		}
	?>
	
	<br/>
	<br/>
	<b>Continue Break</b>
	<br/>
	
	<?php
		echo "<br/>";
		 $array = array(1,2,3,9,8,7,6,5,11,12,15);
		 foreach ($array as $i){
			if ($i%2 != 0){
				if ($i > 10){
					break;
				} elseif ($i == 5) {
					continue;
				}
				echo "<br/>" . $i;
			}
		 }
	?>
	
	<br/>
	<br/>
	<b>Pointers</b>
	<br/>
	
	<?php
		echo "<br/> 1: " . current($array);
		next($array);
		echo "<br/> 2: " . current($array);
		next($array);
		echo "<br/> 3: " . current($array);
		reset($array);
		echo "<br/> 4: " . current($array);
	?>
	
	<?php
	echo "<br/>";
	$ages = array(10,12,22,15);
		while ($age = current($ages)){
			echo "<br/>" . $age . "";
			next($ages);
		}
	?>
	
</body>
</html>
