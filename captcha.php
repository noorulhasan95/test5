<?php
	session_start();
	include("./phptextClass.php");	
	
	/*create class object*/
	$phptextObj = new phptextClass();	
	/*phptext function to genrate image with text*/
	$phptextObj->phpcaptcha('#0288d1','#fff',100,40,10,25);	
 ?>