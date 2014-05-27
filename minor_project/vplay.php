<!DOCTYPE HTML>
<html ln='en'>
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/play.css">
        <!--<link rel="stylesheet" type="text/css" href="css/footer.css">-->
        
        <title>Title Of the page</title>
	</head>
    <body>
		<?php include('includes/header.php') ?>
		<?php include('includes/nav.php') ?>
		
		<aside id="main_aside">This is aside of this page.</aside>
		<section id="main_section">
		
			<?php
				$title=$_POST['song'];
				echo $title = str_replace( '/', '', $title);
				include 'connection.php';
				$query = "SELECT * FROM  `video` WHERE `Title`='".$title."'";
				if($query_run = mysql_query($query)){
					$query_num_rows = mysql_num_rows($query_run);
						$array=mysql_fetch_array($query_run);
						echo '<article>
								<div class="info">
									<p id="para_1">
										<h1>Name</h1>
										<h3>Album</h3>
										<h2>Artist</h2>
									</p>
									<p id="para_1">
										<h4>Size</h4>
										<h4>Type</h4>
									</p>
								</div>
								<div class="info">
									<div class="player">';
										$add=$array['add'];
										$str = str_replace( 'C:/xampp/htdocs/minor_project', '.', $add);
										echo '<video src="./videos/game on building.mp4" preload="auto" controls></video>
									</div>
								</div>
							</article>';
							require 'core.php';
							if(loggedin()){
								echo '<div class="player">
										<form action="download.php" method="post">
											<button type="submit" value="Download File"><img src="./images/down.gif" height="30px" width="90px"></button>
										</form>
									</div>';
							}
							else{
								echo '<div class="info">To download this song, <a href="login.php">Sign in</a>.</div>';
							}	
				}
			?>
			
		</section>
		
		<?php include('includes/footer.php') ?>
	</body>
</html>