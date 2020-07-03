<?php
/*
deleteEnrole
Purpose: Delete an enrollment
Description: This code sets the delete date to today's date & sets the deleteflag on the enrolement table to 1
The placesRemaining field on the Training table is updated to add an extra place on the course the client was deleted from
The number of courses the client is enrolled on is updated 
Author: Michelle Bolger
Date: March 2020
*/



	session_start();
	include 'connect.php';
	//used to set current date as cancelled date in enrolement table
	$_SESSION['date'] = date('Y-m-d');//holds current date 
	
	
	$sql = "update Enrolement set DateCancelled = '$_SESSION[date]',DeleteFlag = 1 where EnrolementID = $_POST[enroleid]";
	
	
	if(!$result = mysqli_query($con,$sql)){
		die('Error in querying the database' . mysqli_error($con));
	}
	//used to add 1 more avaiable space in places remaining field in training
	$sql = "update Training set placesRemaining = placesRemaining +1 WHERE CourseID = $_POST[courseid]";
	if(!$result = mysqli_query($con,$sql)){
		die('Error in querying the database' . mysqli_error($con));
	}
	//used to subtract one from the number of courses the client is enroled on in client
	$sql = "update Client set NumOfCourses = NumOfCourses -1 WHERE ClientID = '$_SESSION[clientid]'";
	if(!$result = mysqli_query($con,$sql)){
		die('Error in querying the database' . mysqli_error($con));
	}
	
	
mysqli_close($con);
header('Location:clientNameList.php');
?>	