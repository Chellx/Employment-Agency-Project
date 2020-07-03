<!---
Add Job Form 
Purpose: Form to add job information into database
Description: This code is a form for a user to fill out to add details about a new job to add into the employment agency database
Author: Michelle Bolger
Date: February 2020
--->
<html lang="en">
<!DOCTYPE html>
	<head>
	<DIV ALIGN=CENTER>
	<A HREF="mainMenu.html"><IMG SRC="logo.png" alt="CDDM Employment Agency Logo"> <!---Company Logo --->
	
		<meta charset="UTF-8">
	
		<title>Add Job</title>
		
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
			height: 730px;
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
		
		#Company{
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
	
			function populate(){ //puts result from selected item of the listbox and puts it in the amendid input field (hidden)
				var sel = document.getElementById("Company");
				var result;
				result = sel.options[sel.selectedIndex].value;
				document.getElementById("amendid").value = result;
			}
			
			
			function confirmCheck(){ // confirm if details user entered are correct
				var response;
				response=confirm('Are You Sure You Want To Add This Job?');
				
				if(response){
					window.alert("The Job Has Been Added To The Database");
						return true;
				}
				else{
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

<form action= "insertaddjob.php" onsubmit="return confirmCheck()"  method="Post">
<header class="title">
<h2>Add A New Job</h2>
</header>

<article class="inputbox1">
	<div class="leftalign">
		<label for="jobtitle">Job Title: </label>
		<input type="text" name="jobtitle" id="jobtitle" placeholder="Job Title" required />
	</div><br>
</article>

<article class="inputbox1">
	<div class="leftalign">
		<label for="jobdescription">Job Description: </label>
		<textarea  id="jobdescription" rows="2" cols="41" name="jobdescription" placeholder="Job Description" required ></textarea>
	</div><br>
</article>

<article class="inputbox1">
	<div class="leftalign">
		<label for="companyname">Company Name: </label>
		<?php include "listcompany.php" ?>  <!--Include the code in listcompany php file-->
		<input type = "hidden" name = "amendid" id = "amendid"  > <!--Hidden input box to hold company ID number from database-->
	</div><br>
</article>

<article class="inputbox1">
	<div class="leftalign">
		<label for="qualification">Qualification Required: </label><br>
		<select name = "qualification" id="qualification" required> 
		<option value=""selected disabled hidden>-Select Qualification-</option>
		<option value="Level 5 (Certificate)">Level 5 (Certificate)</option>
		<option value="Level 6 (Advanced Certificate)">Level 6 (Advanced Certificate)</option>
		<option value="Level 7 (Ordinary Bachelor Degree)">Level 7 (Ordinary Bachelor Degree)</option>
		<option value="Level 8 (Honours Bachelor Degree)">Level 8 (Honours Bachelor Degree)</option>
		<option value="Level 9 (Masters Degree)">Level 9 (Masters Degree)</option>
		<option value="Level 10 (Doctoral Degree)">Level 10 (Doctoral Degree)</option>
		</select>
	</div><br>
</article>

<article class="inputbox1">
	<div class="leftalign">
		<label for="typeofwork">Type Of Work: </label><br>
		<select name ='typeofwork' id="typeofwork" required> 
		<option value=""selected disabled hidden>-Select Type Of Work-</option>
		<option value="Full-Time">Full-Time</option>
		<option value="Part-Time">Part-Time</option>
		<option value="Fixed-Term">Fixed-Term</option>
		<option value="Temporary">Temporary</option>
		</select>
	</div><br>
</article>

<article class="inputbox1">
	<div class="leftalign">
		<label for="salary">Annual Salary: </label><br>
		<input type="number" min = "1" step="0.01" name="salary" id="salary" placeholder="Annual Salary" required />
	</div><br>
</article>



<article class="inputbox1">
	<div class="leftalign">
		<label for="licence">Driver's Licence Required: </label>
		<input type="radio" name="licence" id="licence" value="Yes" required>Yes
		<input type="radio" name="licence" id="licence" value="No">No<br>
	</div><br>
</article>

<article class="inputbox1">
	<div class="leftalign">
		<label for="location">Job Location: </label><br>
		<input type="text" name="location" id="location" placeholder="Job Location" required />
	</div><br>
</article>



<article class="boxcentre">
	<input type="submit" class="button" value="SUBMIT">
	<input type="reset" class="button" value="CLEAR">
</article>

</footer>
</div>

</section>
</body>
</html>