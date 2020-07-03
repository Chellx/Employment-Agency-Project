<!---
View/Amend Job Form 
Purpose: Form to View/Amend job information 
Description: This code is a form for a user to view details about a job in the database or select a job and edit certain information about the job
Author: Michelle Bolger
Date: March 2020
--->
<html lang="en">
<!DOCTYPE html>


	<head>
	<DIV ALIGN=CENTER>
	<A HREF="mainMenu.html"><IMG SRC="logo.png" alt="CDDM Employment Agency Logo"> <!---Company Logo --->
	
		<meta charset="UTF-8">
		<title>View/Amend Job</title>
		
		
		<style> 
		/*CSS for navigation bar and dropdown menu options*/

		ul {   /*NAVIGATION BAR*/
		  
		  display: inline-block;    /* inline element you can apply height and width values*/
		  list-style-type: none;    /*No bullet points*/
		  margin: 0;
		  padding: 0 0 40px 0;
		  overflow: hidden;
		  background-color: white;
		  text-align:center;
		  font-family: Arial, Helvetica, sans-serif;
		}
		
		
		li {
			float: left;
		}
		
		li a, .dropbtn {
		  display: block;
		  color: rgb(65,105,225); /* NAVIGATION BAR OPTIONS royal blue*/
		  font-style:bold;
		  font-size:20px;
		  text-align: center;
		  padding: 20px 60px;
		  text-decoration: none;
		  display: inline-block;
		}
	


		li a:hover, .dropdown:hover .dropbtn { /*dropdown hover options*/
			background-color: rgb(65,105,225); /*royal blue*/
			color:white;  /*text*/
			}

		li.dropdown {
		  display: inline-block;
		}
		
		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9; /*background of dropdown menu - white*/
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none; /*options such as underline */
		  display: block;
		  text-align: left;
		}

		.dropdown-content a:hover {
		  background-color: rgb(65,105,225); /*royal blue*/
		}

		.dropdown:hover .dropdown-content {
			display: block;   /*dropdown content text before cursor hovers*/
		}
		
		li a:hover:not(.active){ /*dropdown option not active*/
			background-color: #314891;  /*DARK BLUE*/
			color:white;   /*dropdown content text when cursor hovers over*/
		 
		}
		
		li a.active { /*dropdowncontent options that are active*/
			background-color: rgb(65,105,225); /*royal blue*/
			color:white;
		}


		/*CSS For frame around form*/
		
		.frame {
			padding: 10px;
			border-style: hidden;
			border: solid;
			border-radius: 12px; /*rounded border*/
			border-color: rgb(65,105,225); /*royal blue*/
			height: 860px;
			width:  440px;
		}
	
		.title {  /*Form title*/
			text-align: center;
			color:rgb(65,105,225); /*royal blue*/
			font-size:20px;
			padding: 0 0 20px 0;
			font-family: Arial, Helvetica, sans-serif;
		}
	
	
		.inputbox1 {   /*Text box labels*/
			padding:5px 50px;
			font-family: Arial, Helvetica, sans-serif;
			color:rgb(65,105,225); /*royal blue*/
			align:left;
		}
	

	
		.boxcentre { /*align submit and clear buttons*/
			text-align:center;
			padding:20px;
		}
	
		.button {  /*button design*/
			background-color:  #314891; /*dark blue*/
			border: none;
			border-radius:8px;
			color: white;
			padding: 15px 32px;
			text-align: center;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
		
		.leftalign{ /*Align text box labels to the left*/
		text-align: left;
		}
		
		/*Input box widths*/
		
		#companyname{
			width:350px;
		}
		#jobtitle{
			width:350px;
		}
		#qualification{
			width:350px;
		}
		#location{
			width:350px;
		}
		textarea {
			resize: none; /*Dont allow user to rezise the text area box*/
		}
	
	
	</style>
	
	</head>
	<script>
	
	
	function populate()//puts result from selected item of the listbox and puts it in the amendid input field (hidden)
		{
				var sel = document.getElementById("listbox");
				var result;
				result = sel.options[sel.selectedIndex].value;
				var jobDetails = result.split(',');
	
				document.getElementById("jobID").value = jobDetails[0];
				document.getElementById("jobtitle").value = jobDetails[1];
				document.getElementById("jobdescription").value = jobDetails[2];
				document.getElementById("companyname").value = jobDetails[3];
				document.getElementById("qualification").value = jobDetails[4];
				document.getElementById("typeofwork").value = jobDetails[5];
				document.getElementById("salary").value = jobDetails[6];
				document.getElementById("licence").value = jobDetails[7];
				document.getElementById("location").value = jobDetails[8];
				document.getElementById("companyID").value = jobDetails[9];
		}

	function populatecomp()//puts result from selected item of the listbox and puts it in the amendid input field (hidden)
		{
				var sel = document.getElementById("companyname");
				var result;
				result = sel.options[sel.selectedIndex].value;
				var compDetails = result.split(',');
	
				document.getElementById("companyID").value = compDetails[0];
		}



	function toggleLock() //unlocks fields to be editable
		{
	
			if (document.getElementById("amendViewbutton").value == "Amend Details")
				{
		
					document.getElementById("jobtitle").disabled = false;
					document.getElementById("jobtitle").focus(); //get cursor to appear in the jobtitle field when user selects amend details
					document.getElementById("companyname").disabled = false;
					document.getElementById("jobdescription").disabled = false;
					document.getElementById("qualification").disabled = false;
					document.getElementById("typeofwork").disabled = false;
					document.getElementById("salary").disabled = false;
					document.getElementById("licence").disabled = false;
					document.getElementById("salary").disabled = false;
					document.getElementById("location").disabled = false;
					document.getElementById("amendViewbutton").value = "View Details";
				}
					else
					{
						document.getElementById("jobtitle").disabled = true;
						document.getElementById("companyname").disabled = true;
						document.getElementById("jobdescription").disabled = true;
						document.getElementById("qualification").disabled = true;
						document.getElementById("typeofwork").disabled = true;
						document.getElementById("salary").disabled = true;
						document.getElementById("licence").disabled = true;
						document.getElementById("salary").disabled = true;
						document.getElementById("location").disabled = true;
						document.getElementById("amendViewbutton").value = "Amend Details";
					}
		}




	function confirmCheck() //Confirms if user wants to make the changes
		{
			var response;
			response=confirm('Are you sure you want to save these changes?');
			
			if(response)
				{
					window.alert("The Job Has Been Added To The Database");
					document.getElementById("jobID").disabled = false;
					document.getElementById("jobtitle").disabled = false;
					document.getElementById("jobdescription").disabled = false;
					document.getElementById("qualification").disabled = false;
					document.getElementById("typeofwork").disabled = false;
					document.getElementById("salary").disabled = false;
					document.getElementById("licence").disabled = false;
					document.getElementById("location").disabled = false;
					document.getElementById("companyID").disabled = false;
						return true;
				}
						else
						{
							populate();
							populatecomp();
							toggleLock();
								return false;
						}
		}

</script>

	<body>
	<div>
			<ul>
			<!--Dropdown Menu Items -->
			
			   <li class="dropdown">
					<a href="#" class="dropbtn">Company</a>
					<div class="dropdown-content">
					  <a href="#">Add A New Company</a>
					  <a href="#">Delete A Company</a>
					  <a href="#">Amend / View A Company</a>
					</div>
				  </li>
				  
			 
			 <li class="dropdown">
					<a href="#" class="dropbtn">Client</a>
					<div class="dropdown-content">
					  <a href="#">Add A New Client</a>
					  <a href="#">Delete A Client</a>
					  <a href="#">Amend / View A Client</a>
					</div>
				  </li>
				  
				  	 <li class="dropdown">
					<a href="#" class="dropbtn">Training</a>
					<div class="dropdown-content">
					  <a href="#">Enrol On A Course</a>
					  <a href="#">Cancel An Enrolment</a>
					  <a href="#">Add A New Training Course</a>
					  <a href="#">Delete A Training Course</a>
					  <a href="#">Amend / View A Training Course</a>
					</div>
				  </li>
				  
				    	 <li class="dropdown">
					<a href="addjobform.php" class="dropbtn active">Job</a>
					<div class="dropdown-content">
					  <a href="addjobform.php">Add A New Job</a>
					  <a href="#">Delete A Job</a>
					  <a href="vieweditjob.php">Amend / View A Job</a>
					  <a href="#">Fill A Job</a>
					</div>
				  </li>
				  
				    	 <li class="dropdown">
					<a href="#" class="dropbtn">Reports</a>
					<div class="dropdown-content">
					  <a href="#">Companies & Job Vacancies Report</a>
					  <a href="#">Training Courses Report</a>
					  <a href="#">Job Vacancies Report</a>
					   <a href="#">Training Course Enrollent Report</a>
					    <a href="mainMenu.html">Quit</a>
					</div>
				  </li>
			 
			 
		
			  <li><a href="https://www.google.com/">Quit</a></li>
			</ul>
			
	

	
	</div>	
	
	
	<section class="frame">
	<!-- Form -->
	<header class="title">
<h2>View/Amend Job</h2>
		
</header>
<?php include "joblistbox.php" ?>
<input type = "button" value = "Amend Details" id = "amendViewbutton" onclick = "toggleLock() ">
<form action= "insertvieweditjob.php" onsubmit="return confirmCheck()"  method="Post">

<BR>
<article class="inputbox1">
	<div class="leftalign">
		<label for="jobID">Job ID: </label>
		<input type="text" name="jobID" id="jobID" placeholder="Job ID" disabled />
	</div><br>
</article>

<article class="inputbox1">
	<div class="leftalign">
		<label for="jobtitle">Job Title: </label>
		<input type="text" name="jobtitle" id="jobtitle" placeholder="Job Title" disabled />
	</div><br>
</article>

<article class="inputbox1">
	<div class="leftalign">
		<label for="jobdescription">Job Description: </label>
		<textarea  id="jobdescription" rows="2" cols="41" name="jobdescription" placeholder="Job Description" disabled ></textarea>
	</div><br>
</article>

<article class="inputbox1">
	<div class="leftalign">
		<label for="companyname">Company Name: </label>
		<?php include "listcompany2.php" ?>  <!--Include the code in listcompany php file-->
		<input type = "hidden" name = "companyID" id = "companyID">
	</div><br>
</article>

<article class="inputbox1">
	<div class="leftalign">
		<label for="qualification">Qualification Required: </label><br>
		<input type="text" name="qualification" id="qualification" placeholder="Qualification Required" disabled />
	</div><br>
</article>

<article class="inputbox1">
	<div class="leftalign">
		<label for="typeofwork">Type Of Work: </label><br>
		<input type="text" name="typeofwork" id="typeofwork" placeholder="Type Of Work" disabled />
	</div><br>
</article>

<article class="inputbox1">
	<div class="leftalign">
		<label for="salary">Annual Salary: </label><br>
		<input type="text" name="salary" id="salary" placeholder="Annual Salary" disabled />
	</div><br>
</article>



<article class="inputbox1">
	<div class="leftalign">
		<label for="licence">Driver's Licence Required: </label><br>
		<input type="text" name="licence" id="licence" placeholder="Driver Licence Required" disabled />
	</div><br>
</article>

<article class="inputbox1">
	<div class="leftalign">
		<label for="location">Job Location: </label><br>
		<input type="text" name="location" id="location" placeholder="Job Location" disabled />
	</div><br>
</article>



<article class="boxcentre">
	<input type="submit" class="button" value="SAVE">
	<input type="reset" class="button" value="CLEAR">
</article>



</section>
</body>
</html>