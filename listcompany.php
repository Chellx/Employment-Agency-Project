<?php
/*
List Company
Purpose: To retrieve the Company ID & Company Name From Company Table
Description: This code retrieves the CompanyID & CompanyName, The populate method is called to fill a hidden input box with the company id when the company name is selected from a dropdown list 
Author: Michelle Bolger
Date: February 2020
*/

include "connect.php"; //database connection

$sql = "SELECT CompanyID,CompanyName FROM Company";//Retrives company name and id from the database

if (!$result = mysqli_query($con,$sql))
{
	die ('Error in querying the database' . mysqli_error($con));
}

echo "<select name = 'Company' id = 'Company' onclick = 'populate()' > "; //populate method is called to fill hidden inputbox on form with the selected company id 


while ($row = mysqli_fetch_array($result))
{
	$id = $row['CompanyID'];
	$companyname = $row['CompanyName'];
	$theID = "$id";
	echo "<option value = '$theID'>$companyname </option>"; // Company names in listbox 
}
echo "</select>";
mysqli_close($con);
?>