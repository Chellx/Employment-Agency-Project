<?php
/* 
Insert Into Database
Purpose: To update information to the database
Description: This code updates the information from the view/amend form 
Author: Michelle Bolger
Date: March 2020
*/

include 'connect.php';



$sql = "UPDATE Job SET JobTitle = '$_POST[jobtitle]', Description = '$_POST[jobdescription]',
		QualificationRequired = '$_POST[qualification]',TypeOfWork = '$_POST[typeofwork]', AnnualSalary= '$_POST[salary]',
		DriversLicence = '$_POST[licence]', JobLocation = '$_POST[location]', CompanyID='$_POST[companyID]' WHERE JobID = '$_POST[jobID]'";
		
		
if (!mysqli_query($con,$sql))
{
	die("An Error In The SQL Query: " . mysqli_error() );
	
}


mysqli_close($con);
header('Location: vieweditjob.php'); //Bring user back to view/amend form page
?>

