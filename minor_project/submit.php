<html>
<head><title>test</title></head>
<body>
<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db("tms_users", $con);
	$result = mysql_query("SELECT * FROM tms_users");
	while($row = mysql_fetch_array($result))
	{
		echo $row['first_name'] . " " . $row['middle_name']." ".$row['last_name']." ".$row['email_id']." ".$row['phone']." ".$row['gender']." ".row['dob'];
		echo "<br />";
	}
	mysql_close($con);
?>
</body>
</html>