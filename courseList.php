<?php

/*
courseList
Purpose: Selects the course 
Description: This code selects the appropriate course and displays the infomation in a listbox
Author: Michelle Bolger
Date: March 2020
*/

	session_start();
	include 'connect.php';
	$sql = "SELECT Training.CourseID,CourseTitle,CourseProvider,Description,EnrolementID FROM Enrolement inner join Training on Enrolement.CourseID = Training.CourseID where ClientID = '$_SESSION[clientid]' and CourseStatus = 'Taking Bookings' and DeleteFlag = 0";
	if(!$result = mysqli_query($con,$sql)){
		die('Error in querying the database' . mysqli_error($con));
	}
	echo "<select name = 'courseList' id = 'courseList' onclick = 'populate()'>";
	
	while($row = mysqli_fetch_array($result)){
		$cid = $row['CourseID'];
		$courseTitle = $row['CourseTitle'];
		$coursePro = $row['CourseProvider'];
		$courseDes = $row['Description'];
		$eid = $row['EnrolementID'];
		$allText = "$cid^$courseTitle^$coursePro^$courseDes^$eid";
		echo "<option value = '$allText'>$courseTitle</option>";
	}
	echo "</select>";
?>