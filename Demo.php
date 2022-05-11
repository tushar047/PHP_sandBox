<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>PHP Demo</title>
	</head>

	<body>
	<b>Variables</b>
	<br/>
		<?php
		// Variables
			$var1 = 10;
			echo $var1; 
			$var2 = "<br/> Hello World! <br/>";
			echo $var2;
			$var1 = 100;
			echo $var1;
		?>
	<br/><br/>
	<b>Strings</b>
	<br/>
		<?php
		# Strings & String Functions
			echo "<br/> {$var2} Again <br/>";
			$str1 = "The wolf was";
			$str2 = " black with sharp teeth.";
			$str3 = $str1;
			$str3 .= $str2;
			echo $str3;
			echo "<br/>";
			
			echo "<br/>LowerCase:" . strtolower($str3);
			echo "<br/>UpperCase:" . strtoupper($str3);
			echo "<br/>UpperCase first-letter:" . ucfirst($str3);
			echo "<br/>UpperCase words:" . ucwords($str3);
			echo "<br/>Length:" . strlen($str3);
			echo "<br/>Trim:" . $str4 = $str1 . trim($str2);
			echo "<br/>Find:" . strstr($str3, "black");
			echo "<br/>Replace by String:" . str_replace("sharp", "bloody", $str3);
			echo "<br/>";
			
			echo "<br/>Repeat: " . str_repeat($str3, 2);
			echo "<br/>Make substring: " . substr($str3, 3, 16);
			echo "<br/>Find Position: " . strpos($str3, "black");
			echo "<br/>Find character: " . strchr($str3, "w");
		?>
		<br/><br/>	
		<b>Numbers</b>
		<br/>
		<?php
		// Numbers
	
	
			echo "<br/> Basic Math: " . $var_f = (1+2+$var1)*22/50+$var1;
			echo "<br/>" . ($var1 += 4);
			echo "<br/> Round: " . round($var_f, 1);
			echo "<br/> Ceiling: " . ceil($var_f);
			echo "<br/> Floor: " . floor($var_f);
		?>
		<br/><br/>
		<b>Array</b>
		<br/>
		<?php
		// Array and Functions
		
			$array1 = array(2,4,6,8,9,10);
			echo "<br/>" . $array1[0];
			
			$array2 = array(2,"5","dog",array(2,"14","man"));
			echo "<br/>" . $array2[3][1];
			
			$array2[3][1] = "Fourteen";
			echo "<br/>" . $array2[3][1];
			
			$array3 = array("first_name" => "Tushar", "last_name" => "Talreja");
			echo "<br/>" . $array3["last_name"]." ".$array3["first_name"];
			
			echo "<br/> Count: " . count($array1);
			echo "<br/> Max: " . max($array1);
			echo "<br/> Min: " . min($array1);
			
			echo "<br/ Sort: >";
			sort($array1);
			echo "<br/>";
			print_r($array1);
			echo "<br/ Reverse Sort: >";
			rsort($array1);
			print_r($array1);
			
			echo "<br/>Implode: " . $str1 = implode("*",$array1);
			echo "<br/>" ;
			echo "<br/>Explode: ";
			print_r(explode("*",$str1));
			
			echo "<br/>" . in_array(10,$array1);
		?>
		<pre>
			<?php
				print_r($array2); 
			?>
		</pre>
		<br/><br/>
		<b>Booleans<b/>
		<br/>
		
		<?php
			$a = 3;
			$b;
			
			echo "<br/>a is set: " . isset($a);
			echo "<br/>b is set: " . isset($b);
			echo "<br/>var1 is set: " . isset($var1);
			
			unset($a);
			
			echo "<br/>a is set: " . isset($a);
			echo "<br/>is a empty: " . empty($a);
		?>
		
		<br/><br/>
		<b>TypeCasting</b>
		<br/>
		
		<?php
			$a= "2";
			$b= $a + 3;
			echo "<br/>" . $b;
			
			echo "<br/>" . gettype($a);
			echo "<br/>" . gettype($b);
			settype($b,"string");
			echo "<br/>" . gettype($b);
			$c= (int) $a+$b;
			echo "<br/>" . $c;
			echo "<br/>" . gettype($c);
		?>

		<br/><br/>
		<b>Constants</b>
		<br/>
		
		<?php
			$MAX_WIDTH=900;
			echo "<br/>" . $MAX_WIDTH;
			define("MAX_WIDTH",980);
			echo "<br/>" . MAX_WIDTH;
		?>
		
	</body>
</html>
