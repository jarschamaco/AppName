<?php 

	session_start(); /* Starts the session */
	session_destroy(); /* Destroy started session */

	header("location: ../../pages/subPages/login.html");  /* Redirect to login page */
	exit;


 ?>