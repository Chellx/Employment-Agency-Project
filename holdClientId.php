

<?php

/*
holdclientID
Purpose: Hold selected clients ID
Description: This code holds the selected client ID, to ensure the appropriate course that client is enrolled on are shown
Author: Michelle Bolger
Date: March 2020
*/


session_start();
	$_SESSION['clientid'] = $_POST[clientID];
header('Location:selectCourse.php');
?>