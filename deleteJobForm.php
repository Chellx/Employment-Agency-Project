<!---
Delete Job Form 
Purpose: To delete (mark for deletion) a job in the database
Description: This code is a form for a user to view details about a job in the database to mark if for deletion
Author: Michelle Bolger
Date: March 2020
--->
<html lang="en">
<!DOCTYPE html>


	<head>
	<DIV ALIGN=CENTER>
	<A HREF="mainMenu.html"><IMG SRC="logo.png" alt="CDDM Employment Agency Logo"> <!---Company Logo --->
	
		<meta charset="UTF-8">
		<title>Delete Job</title>
		
		
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
			height: 720px;
			width:  460px;
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
	
	
		function populate()//puts result from selected item of the listbox 
				{
					var sel = document.getElementById("joblist");
					var result;
					result = sel.options[sel.selectedIndex].value;
					var jobDetails = result.split('^');
	
					document.getElementById("jobID").value = jobDetails[0];
					document.getElementById("jobtitle").value = jobDetails[1];
					document.getElementById("jobdescription").value = jobDetails[2];
					document.getElementById("companyname").value = jobDetails[3];
					document.getElementById("typeofwork").value = jobDetails[4];
					document.getElementById("salary").value = jobDetails[5];
					document.getElementById("location").value = jobDetails[6];
				}
	
		function confirmCheck()
				{
					var response;
					response=confirm('Are you sure you want to save these changes?');
				
				if(response)
					{
						window.alert("The Job Has Been deleted from the Database");
						document.getElementById("jobID").disabled = false;
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
					  <a href="deletejob.html">Delete A Job</a>
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
<h2>Delete Job</h2>
		
</header>


<article class="inputbox1">
	<div class="leftalign">
		<label for="select">Select A Job To Delete</label><?php include "deleteJobList.php"; ?></div></article>
<form action= "deleteJob.php" onsubmit="return confirmCheck()"  method="Post">

<br><br>
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
		<input type = "text" name = "companyname" id = "companyname" disabled>
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
		<label for="location">Job Location: </label><br>
		<input type="text" name="location" id="location" placeholder="Job Location" disabled />
	</div><br>
</article>
<article class="boxcentre">
	<input type="submit" class="button" value="DELETE">
	<input type="reset" class="button" value="CLEAR">
</article>
</section>
</body>
</html>