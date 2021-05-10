<?php
SESSION_START();
include "configImport.php";
error_reporting(0);

	/*$instructorID = $_SESSION['id'];
	$className = $_SESSION['selectedClassName'];

	$sql = "SELECT class_id
			FROM classes
			WHERE instructor_id = '$instructorID' AND 'class_name' = '$className'";

    $result = mysqli_query($con, $sql) or die("Bad Query: $sql");

    while($rows = $result -> fetch_assoc())
	{
		$_SESSION['current_class'] = $rows['class_id'];
    }*/

	$classId = $_SESSION["current_class"];

	echo($classID);

	$deleteSql = "DELETE FROM `classes` WHERE `class_name` = '$classId'";

	$data = mysqli_query($con, $deleteSql) or die("Bad Query: $deleteSql");
?>