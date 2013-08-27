<?php

	require("countryconnection.php");
	?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student Records</title>
	</head>
	<body>

		<?php
		$query = "SELECT name FROM records";
		$data = fetch_all($query);
		?>

		<h3>Check Record</h3>

	
		<form name="check_record" action="countryprocess.php" method="post">	
			<input type="hidden" name="action" value="check_records"/>		
			<label for="student">Student Name</label>
			<select name="student">
			    <?php 
			    foreach ($data as $rows)
			    {
				    foreach($rows as $item)
				    {
				    echo "<option value=" . $item . ">" . $item . "</option>";
					}			
				}
				?>
			</select>
			<input type="submit" value="Check Record">

			<?php
			$show_records = checkRecords();
			$query1 = "SELECT * FROM records";
			?>


		<h3>Add Record</h3>
		</form>



		<form name="add_records" action="countryprocess.php" method="post">	
			<input type="hidden" name="action" value="add_records"/>
			Subject: <input type="text" name="subject" value="subject"><br><br>
			Grade: <select>
					<?php
				$grades = range(1, 100);

				$count = count($grades);
				for($i=0; $i<$count; $i++ )
				{
					echo "<option value=" . $i . ">" . $i . "</option>";
				}
				?>
			</select>
			<p>Notes</p><p><textarea cols="40" rows="5" name="notes">		
			</textarea></p>
			<input type="submit" value="Add Record" />


	</body>
</html>