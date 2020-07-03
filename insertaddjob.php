<?php
/*
Insert Into Database
Purpose: To insert information to the database
Description: This code inserts the information from the addjob form into the database
Author: Michelle Bolger
Date: February 2020
*/

include 'connect.php';


	$sql = "Select max(JobID)as maximumId from Job"; //Retrieves the maximun ID number from JobID from Job table
	$result = mysqli_query($con,$sql);
	$rowcount = mysqli_affected_rows($con);

	if($rowcount == 1){
		$row = mysqli_fetch_array($result); //fetches field names from databse table
		$idNum = $row['maximumId'] +1; //Add 1 to the maximumId to create a new primary key
	}	
	else if(rowcount == 0){
		echo "Error";
	}
$jobstatus = "Available"; //Job Status is autmatically set to Available
$sql = "Insert into Job (JobID,JobTitle,Description,QualificationRequired,TypeOfWork,AnnualSalary,DriversLicence,JobLocation,JobStatus,CompanyID)
VALUES ('$idNum','$_POST[jobtitle]','$_POST[jobdescription]','$_POST[qualification]','$_POST[typeofwork]','$_POST[salary]','$_POST[licence]','$_POST[location]','$jobstatus','$_POST[amendid]')";

if (!mysqli_query($con,$sql))
{
	die("An Error In The SQL Query: " . mysqli_error() );
	
}



mysqli_close($con);
header('Location: addjobform.php'); //Bring user back to addjobform page
?>

