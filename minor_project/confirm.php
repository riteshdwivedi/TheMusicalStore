<!DOCTYPE html>

<html lang="en" class="modern">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
	    <title>TMS Signup Form</title>
        
    	<link rel="stylesheet" type="text/css" href="css/sign_up.css">
	    <link rel="stylesheet" type="text/css" href="css/form.css">
		<script type="text/javascript" src="javascripts/sign_up.js"></script>
	</head>
    
	<body>
		<div id="wrapper">
			<?php
				require 'core.php';				
				if(loggedin()){
					echo '<header id="main_header">
							<h1>You\'re already logged in.</h1>
						  </header>';
					die();
				}
			?>
			<header id="main_header">
				<h1>Confirm your details.</h1>
			</header>
			
			<div class="main_div">
				<section id="main_section">
					
				</section>
			</div>
		</div>
	</body>
</html>