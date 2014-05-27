<!DOCTYPE html PUBLIC>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset="UTF-8" />
    
    	<title>TMS Login</title>
    	
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="css/login.css" />
		<script>
			function goBack(){
				window.history.back()
			}
			function go(){
				alert("Password send at yourname email.");
				document.location='home.php';
			}
		</script>
	</head>

	<body>
		<div id="wrapper" style="position: absolute; visibility: visible; z-index: 999999; margin: 0px; zoom: 1; top: 66.2px; left: 427.5px; display: block;">
			<a class="dialog-close action-close" onClick="goBack()"></a>
			<div class="dialog-body">
				<div class="dialog-tab dialog-box-login">
					<span class="dialog-logo"><img src="images/Logo.png" height="50px" width="150px" /></span>
					<a id="login-switch-context-sign-up" href="sign_up.php" class="switch-context switch-context-link switch-context-label">JOIN US</a>
					
					<div class="clearfix"></div>
					
					<div class="dialog-box">
						<div class="dialog-title">Forgot your password?</div>
					</div>
					<div class="forgot-desc">Enter your Email address and we'll send your password:</div>
					
					<div class="input-box">
						<input tabindex="1" id="forgot-password-input-email" name="email" type="text" maxlength="60" class="inp enter-key" validation="notempty;length:{7,60};email" placeholder="Email" />
						<label class="input-box-desc">(e.g. yourname@gmail.com)</label>
						<?php
							if(isset($_POST['email-id'])){
								if(!empty($email)){
									if(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
										$error="";
									}else{
										echo $error="Invalid email";
									}
								}else{
									echo $error='*Please enter your email.';
								}
							}
						?>
					</div>
					
					<div class="action-box">
						<a id="forgot-password-action-go" href="home.php" class="dialog-button action-forgot" onClick='go()'>Go</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
