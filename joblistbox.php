<?php
/*
JobListBox
Purpose: Lists the jobs by job title
Description: This code retrieves all the information about Jobs that are available and shows only the job title in a dropdown box
Author: Michelle Bolger
Date: March 2020
*/
include "connect.php"; //database connection

$sql = "SELECT JobID, JobTitle, Job.Description, CompanyName,QualificationRequired,TypeOfWork, AnnualSalary, DriversLicence, 
JobLocation, Job.CompanyID FROM Job inner join Company on Job.CompanyID=Company.CompanyID  WHERE JobStatus = 'Available'";

if (!$result = mysqli_query($con,$sql))
{
	die ('Error in querying the database' . mysqli_error($con));
}

echo "<select name = 'listbox' id = 'listbox' onclick = 'populate()'>";

while ($row = mysqli_fetch_array($result))
{
	$id = $row['JobID'];
	$jtitle = $row['JobTitle'];
	$comp = $row['CompanyName'];
	$jdescription = $row['Description'];
	$jqualification = $row['QualificationRequired'];
	$work = $row['TypeOfWork'];
	$salary = $row['AnnualSalary'];
	$licence = $row['DriversLicence'];
	$jlocation = $row['JobLocation'];
	$jcompid = $row['CompanyID'];
	$allText = "$id,$jtitle,$jdescription,$comp,$jqualification,$work,$salary,$licence,$jlocation,$jcompid";
	echo "<option value = '$allText'>$jtitle</option>";
}
echo "</select>";
mysqli_close($con);
?>
	
	
