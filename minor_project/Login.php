<!DOCTYPE html PUBLIC>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset="UTF-8" />
    
    	<title>TMS Login</title>
    	
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="css/login.css" />
		<script>function goBack(){window.history.back()}</script>
	</head>


	<body>
		<div id="wrapper" style="position: absolute; visibility: visible; z-index: 999999; margin: 0px; zoom: 1; top: 66.2px; left: 427.5px; display: block;" >
			<a class="dialog-close action-close" onClick="goBack()"></a>
        
			<div class="dialog-body">
				<div class="dialog-tab dialog-box-login">
					<a href="home.php"><span class="dialog-logo"><img src="./images/Logo.png" height="50px" width="150px" /></span></a>
					
					<?php
						require 'core.php';
						if(loggedin()){
							echo '<a id="login-switch-context-sign-up" class="switch-context switch-context-link switch-context-label" href="logout.php">Log out</a>
								  <div class="dialog-box"><div class="dialog-title">You\'re already logged in.</div></div>';
							die();
						}
					?>
					<a id="login-switch-context-sign-up" class="switch-context switch-context-link switch-context-label" href="sign_up.php">Join Us</a>
					<div class="clearfix"></div>
					
					<div class="dialog-box">
						<div class="dialog-title">Login</div>
					</div>
					
					<div class="input-box">
						<form action="login.php" method="post">
							<input tabindex="1" id="login-input-email" name="username" type="text" maxlength="60" class="inp enter-key" validation="notempty;length:{7,60};email" placeholder="Username" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];} ?>" >
							<label class="input-box-desc">(e.g. yourname@gmail.com)</label>
							<label name="email" class="input-box-desc hidden-element error-message"></label>
							</div>
							
							<div class="input-box">
								<input tabindex="2" id="login-input-password" name="password" type="password" maxlength="15" class="inp enter-key" validation="notempty;length:{4,15};password" placeholder="Password" >
								<span class="input-box-desc">
								<a id="login-switch-context-forgot-password" href="forgotPassword.php" class="switch-context forgot-password" rev="forgot-password">Forgot password?</a>
								</span>
							</div>
							
							<?php
								if(isset($_POST['username'])&&isset($_POST['password'])){
									$username = $_POST['username'];
									$password = $_POST['password'];
									$password_hash = md5($password);
									
									if(!empty($username)&&!empty($password)){
										$query = "SELECT `mem_id` FROM `test`.`member` WHERE `username` ='$username' AND `password` ='$password_hash'";
										if($query_run = mysql_query($query)){
											$query_num_rows = mysql_num_rows($query_run);
											if($query_num_rows==0){
												echo '<p class="validation-message">Invalid Username or Password</p>';
											}else if($query_num_rows==1){
												$user_id = mysql_result($query_run,0,'mem_id');
												$_SESSION['user_id']=$user_id;
												if(isset($_POST['rememberMe'])){
													$expire=time()+3600*24*30;
													setcookie("username", $username, $expire);
												}
												header('Location: ./home.php');
											}
										}
									}else{
										echo '<p class="validation-message">*You must enter your username and password.<p>';
									}
								}
								
							?>
							
							<div class="action-box">
								<span class="dialog-checkbox">
								<input tabindex="3" id="login-input-remember" name="rememberMe" type="checkbox" checked="checked" />
								<label for="login-input-remember">Remember me</label>
								</span>
								
								<input type="submit" id="login-action-go" class="dialog-button action-login" value="Go"></a>
							</div>
						</form>			
					</div>
				</div>
			</div>
		</div>
	</body>
</html>