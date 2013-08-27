<?php
require("countryconnection.php");
?>

<?php





if(isset($_POST['action']) and $_POST['action'] == "check_records")
{
	$
}
else if(isset($_POST['action']) and $_POST['action'] == "add_records")
{
	addRecords();
}

/*
function checkRecords(){

	$data = fetch_all($query1);

				echo "<table border='1'";
	echo "<tr><th>Student_ID</th> <th>Name</th> <th>Exam_ID</th> <th>Subject</th><th>Grade</th><th>Status</th><th>Notes</th></tr>";
	foreach($data as $rows)
	{
		echo  "<tr>"; 
		foreach($rows as $item)
		{
			echo "<td>" . $item . "</td>" ;
		}
		echo "</tr>";
	}

}
*/




?>