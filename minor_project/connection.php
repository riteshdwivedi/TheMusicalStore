<?php
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'tms';
	$mysql_table= 'members';
	$con=mysql_connect($mysql_host, $mysql_user, $mysql_pass);
	$db= mysql_select_db($mysql_db,$con);
	if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass)&&!mysql_select_db($mysql_db,$con)){
		die(mysql_error());
	}
?>