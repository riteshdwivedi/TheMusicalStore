<!DOCTYPE html PUBLIC>

<html>
	<head>
    	<meta http-equiv="Content-Type" content="text/html >
    	<meta http-equiv="X-UA-Compatible" content="chrome=1" >
    	<meta charset="utf-8" >
        <meta name="description" content="Listen, Download and Stream Your Music OR Buy the Intruments and Play them Yourself." >
    	<title>The Musical Store</title>
    
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="home_files/reset.css" />
		<link rel="stylesheet" type="text/css" href="home_files/helvetica.css" />
		<link rel="stylesheet" type="text/css" href="home_files/home.css" />
	</head>
	
	<body lang="en">
		<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
			<div>
				<iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tab-index="-1" src="./home_files/xd_arbiter.htm" style="border: none;"></iframe>
			</div>
		</div>
     
		<script>
    		(function (d, s, id) {
        		var js, fjs = d.getElementsByTagName(s)[0];
		        if (d.getElementById(id)) return;
        		js = d.createElement(s);
		        js.id = id;
        		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		        fjs.parentNode.insertBefore(js, fjs);
		    }(document, 'script', 'facebook-jssdk'));

		    (function () {
        		var po = document.createElement('script');
		        po.type = 'text/javascript';
    		    po.async = true;
    		    po.src = 'https://apis.google.com/js/plusone.js';
    		    var s = document.getElementsByTagName('script')[0];
    		    s.parentNode.insertBefore(po, s);
    		})();
		</script>

		<div id="container" class="template_viewer">
    		<div id="header">
                	<span id="tagline">Listen, Download and Stream Your Music OR Buy the Instruments and Play them Yourself</span>
					
					<?php
						require 'core.php';				
						if(loggedin()){
							echo '<a class="button" id="editButton" href="./logout.php">Sign out</a>';
						}
						else{
							echo '<a class="button" id="editButton" href="./login.php">Sign In</a>';
						}
					?>
					
	                <div class="socialButtons">
    	                <div class="socialButtonsContent">
        	                <div class="facebookWrapper">
            	                <div class="fb-like" data-send="true" data-layout="button_count" data-show-faces="true" fb-xfbml-state="rendered">
									<iframe id="f247ff83c8" name="f39a8231d4" scrolling="no" title="Like this content on Facebook." class="fb_ltr" src="home_files/like.htm" style="border: none; overflow: hidden; height: 20px; width: 71px;"></iframe>
								</div>
							</div>
							<div class="googlePlusWrapper">
								<div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background-position: initial initial; background-repeat: initial initial;">
									<iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1378997917417" name="I0_1378997917417" src="home_files/fastbutton.htm" data-gapiattached="true" title="+1"></iframe>
								</div>
							</div>
						</div>
					</div>
			</div>
			
			<div class="contentWrapper">
				<iframe src="frame.php" width="100%"></iframe>
			</div>
		</div>
	</div>
	</body>
</html>