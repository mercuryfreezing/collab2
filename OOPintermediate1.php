<!DOCTYPE html>
<html>
	<head>
		<title>Animals</title>
		<?php require ("OOPintermediate1_lib.php"); ?>
	</head>
	<body>

		<?php
//Animal Object
			$animal = new Animal("Sasha", 100);
			
			echo "<p>";
			echo "Starting health" ."<br>";
			echo $animal->displayHealth();
			echo "</p>";

			echo "Walking...." . $animal->walk() . "<br>";
			echo "Walking...." . $animal->walk() . "<br>";
			echo "Walking...." . $animal->walk() . "<br>";
			
			echo "<p>";
			echo "Running.....". $animal->run() . "<br>";
			echo "Running.....". $animal->run() . "<br>";
			echo "</p>";

			echo "<p>";
			echo "Finally.....";
			echo $animal->displayHealth();
			echo "</p>";			
//Dog object
			$dog = new Dog("Tashi", 150);

			echo "<p>";
			echo "Starting health" ."<br>";
			echo $dog->displayHealth(); //
			echo "</p>";

			echo "Walking...." . $dog->walk() . "<br>";
			echo "Walking...." . $dog->walk() . "<br>";
			echo "Walking...." . $dog->walk() . "<br>";
			
			echo "<p>";
			echo "Running.....". $dog->run() . "<br>";
			echo "Running.....". $dog->run() . "<br>";
			echo "</p>";

			echo "<p>";
			echo "petting.....". $dog->pet() . "<br>";
			echo "petting.....". $dog->pet() . "<br>";
			echo "</p>";

			echo "<p>";
			echo "Finally.....";
			echo $dog->displayHealth(); 
			echo "</p>";				

//Dragon Object
			
			$dragon = new Dragon("Fiona", 170);

			echo "<p>";
			echo "Starting health" ."<br>";
			echo $dragon->displayHealth(); //
			echo "</p>";

			echo "Walking...." . $dragon->walk() . "<br>";
			echo "Walking...." . $dragon->walk() . "<br>";
			echo "Walking...." . $dragon->walk() . "<br>";
			
			echo "<p>";
			echo "Running.....". $dragon->run() . "<br>";
			echo "Running.....". $dragon->run() . "<br>";
			echo "</p>";

			echo "<p>";
			echo "flying.....". $dragon->fly() . "<br>";
			echo "flying.....". $dragon->fly() . "<br>";
			echo "</p>";

			echo "<p>";
			echo "Finally.....This is a Dragon" . "<br>";
			echo $dragon->displayHealth(); 
			echo "</p>";


		?>

	</body>
</html>