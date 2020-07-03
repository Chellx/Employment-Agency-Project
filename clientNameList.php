<!---
clientNameList
Purpose: Select a client who is enrolled on training courses 
Description: This code is a form for a user to select a client who is enrolled on training courses and then to choose weather to cancel that clients enrollment
Author: Michelle Bolger
Date: March 2020
--->
<html lang="en">
<!DOCTYPE html>


	<head>
	<DIV ALIGN=CENTER>
	<A HREF="mainMenu.html"><IMG SRC="logo.png" alt="CDDM Employment Agency Logo"> <!---Company Logo --->
	
		<meta charset="UTF-8">
		<title>Cancel Enrolment</title>
		
		
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
			height: 250px;
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
				var sel = document.getElementById("clientList");
				var result;
				result = sel.options[sel.selectedIndex].value;
				var cliDetails = result.split(',');
	
				document.getElementById("clientID").value = cliDetails[0];
			}

	function confirmCheck()
			{
				var response;
				response=confirm('Are You Sure This Is The Correct Client?');
		
			if(response)
				{
					return true;
				}
					
					else
						{
							populate();
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
					<a href="#" class="dropbtn active">Training</a>
					<div class="dropdown-content">
					  <a href="#">Enrol On A Course</a>
					  <a href="clientNameList.php">Cancel An Enrollment</a>
					  <a href="#">Add A New Training Course</a>
					  <a href="#">Delete A Training Course</a>
					  <a href="#">Amend / View A Training Course</a>
					</div>
				  </li>
				  
				    	 <li class="dropdown">
					<a href="addjobform.php">Job</a>
					<div class="dropdown-content">
					  <a href="addjobform.php">Add A New Job</a>
					  <a href="deleteJobForm.php">Delete A Job</a>
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
<h2>Select Client</h2>
		
</header>
<form action= "holdClientId.php" onsubmit="return confirmCheck()"  method="Post">
<article class="inputbox1">
	<div class="leftalign">
		<label for="clientname">Client Name: </label>
		<?php include 'clientList.php';?>  <!--Include the code in clientList.php file-->
		<input type = "hidden" name = "clientID" id = "clientID">
	</div><br>
</article>
<article class="boxcentre">
	<input type="submit" class="button" value="SELECT">
	<input type="reset" class="button" value="CLEAR">
</article>
</section>
</body>
</html>