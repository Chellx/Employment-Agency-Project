<?php
/*
deletejoblistbox
Purpose: Lists all the jobs in the database that have not been deleted yet
Description: This code selects all the jobs in the database where the deleterecord is 0 and shows them in a dropdown box displaying the job title only
Author: Michelle Bolger
Date: March 2020
*/
	include 'connect.php';
	$sql = "SELECT JobID,JobTitle,Job.Description,CompanyName,TypeOfWork,AnnualSalary,JobLocation FROM Job inner join Company on Job.CompanyID = Company.CompanyID where Job.DeleteRecord = 0";
	if(!$result = mysqli_query($con,$sql)){
		die('Error in querying the database' . mysqli_error($con));
	}
	echo "<select name = 'joblist' id = 'joblist' onclick = 'populate()'>";
	
	while($row = mysqli_fetch_array($result)){
		$id = $row['JobID'];
		$title = $row['JobTitle'];
		$description = $row['Description'];
		$name = $row['CompanyName'];
		$work = $row['TypeOfWork'];
		$salary = $row['AnnualSalary'];
		$location = $row['JobLocation'];
		$allText = "$id^$title^$description^$name^$work^$salary^$location";
		echo "<option value = '$allText'>$title</option>";  /*Show the jobs not yet deleted*/
	}
	echo "</select>";
?>