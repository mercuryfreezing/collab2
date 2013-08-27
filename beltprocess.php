<?php
require("countryconnection.php");
$current_value = $_POST['list'];


if(isset($current_value))
{
$query = "SELECT * FROM records";
 $result = mysql_query($query);

	while($row = mysql_fetch_assoc($result))
	{
	    echo "Student Id  :{$row['Student_ID']}  <br> ".
	         " NAME : {$row['Name']} <br> ".
	         "Exam Id : {$row['Exam_ID']} <br> ".
	         "Subject : {$row['Subject']} <br> ".
	         "Grade : {$row['Grade']} <br> ".
	         "Status : {$row['STATUS']} <br> ".
	         "Grade : {$row['Notes']} <br> ".
	         "--------------------------------<br>";
	} 
}
?>





