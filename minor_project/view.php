<?php
	session_start();
	if(isset($_SESSION['email'])){
		echo 'Welcome'.' '.$_SESSION['email'];
	}
	else{
		echo 'Please Log in';
	}
	;
?>