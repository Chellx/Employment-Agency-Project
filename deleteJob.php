<?php
/*
Delete Job
Purpose: To mark a job for deletion
Description: This code updates the deleterecord to 1 which means the job has now been marked for deletion
Author: Michelle Bolger
Date: March 2020
*/
	include 'connect.php';
	$sql = "update Job set DeleteRecord = 1 where JobID = $_POST[jobID]";  /*Update the deleterecord field to 1 */
	if(!$result = mysqli_query($con,$sql)){
		die('Error in querying the database' . mysqli_error($con));
	}
	mysqli_close($con);
header('Location:deleteJobForm.php'); /*return to the delete job form*/
?>