<!DOCTYPE html>
<html>
<head>
		<title>Exam</title>

	</head>
	<body>
	<h3>Check Records</h3>
		<form action="beltprocess.php" method="post">
			<input type="hidden" name='action' value='check_records'>
		 Choose Name: <select name="list">;
		 <option value="" selected="selected"></option>
		 <?php
		 //path to connection statements
		 require_once("countryconnection.php");
		 //fetch  name
		 $query = "SELECT name FROM records";
		 $result = mysql_query($query) or die(mysql_error()); 
		 //print results
		 while($row = mysql_fetch_assoc($result)) {
		 echo '<option   value=\"'.$row['name'].'">'.$row['name'].'</option>';
		 }
		 echo "</select>";
		  ?>
		 <input type="submit" value="Check Records">
		 </form>
		</form>

		<h3>Add Records</h3>
			<form name="add_records" action="beltprocess.php" method="post">	
			<input type="hidden" name="action" value="add_records"/>
			Subject: <input type="text" name="subject" value=""><br><br>
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

		</form>






	</body>
</html>