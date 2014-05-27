<!doctype HTML>
<html lan="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script type="text/javascript" src="javascripts/jquery-1.10.2.js"></script>
		
		<title>Join Us</title>
	</head>
	<body>		
		<div id="wrapper">
			<header id="main_header">
				<div id="logo_div">
					<img src="images/logo.png" width=300px height=100px id="logo" alt="The Musical Store"/>
				</div>
				<?php
					require 'core.php';
					if(loggedin()){echo '<div class="header_div"><a href="logout.php">Log out</a></div>';}
					else echo '<div class="header_div">Already have an account, <a href="login.php">Sign in</a></div>';
				?>
			</header>
			
			<?php include 'includes/nav.php';?>
				<aside id="main_aside">
                	<article class="reg_article">
						<p id="reg_article_para1">Welcome to The Musical Store.</p>
                        <p><center>Sign up with this awesome website and it's super easy.</center><br />
    	                	<ol>
        	                	<li>Just fill up the form.</li>
            	                <li>Click 'Create Account' button.</li>
                                <li>Confirm Your details.</li>
                	            Tadda! its done.
                    	    </ol>
					</article>
                    <div id="reg_video" >
                    	<video src="videos/game on building.mp4" height="200" width="300" poster="images/cup.jpg" controls></video>
					</div>
                    <article class="reg_article" style="margin-top: 70px;">
	                    <p>If You face any problem in <em>Signing up</em>, <br/>go to our help page and look out for solution.<br /><br />Still You are stuck,<br/> contact us and we'll help You out.</p>
					</article>
                </aside>
			
				<section id="main_section">
					<div id="iframe"><iframe src="form.php"></iframe></div>
				</section>
            
			<?php include 'includes/footer.php';?>
			
		</div>
	</body>
</html>