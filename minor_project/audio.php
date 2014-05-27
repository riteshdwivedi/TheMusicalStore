<!DOCTYPE html>
<html>
	<head>
		<title>Music</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/audio.css">
		
	</head>
<body>
	<?php include 'includes/header.php';?>
	<?php include 'includes/nav.php';?>
	
	<aside id="main_aside"></aside>
	<section id="main_section">
		<div class="row">
			
			<div class="col">
				<div class="genre" style="width:200px;border:none;"><span class="genre_name">Your favourites on your finger tips</span></div>
				<div class="genre"><img src="images/audio.jpg" class="genre_img" height="200px" width="300px"><span class="genre_name" >Audios</span>
			</div>
			<div class="col">
				<form action="play.php" method="post">
					<?php
						session_start();
						$genre=$_SESSION['genre'];
						include 'connection.php';
						$query = "SELECT * FROM  `audio` WHERE `Genre`='".$genre."'";
						if($result=mysql_query($query)){
							$query_num_rows = mysql_num_rows($result);
							if($query_num_rows==0){
								echo '<p class="validation-message">Sorry, couldn\'t connect to the database.</p>';
							}else{
									while($row = mysql_fetch_array($result)){
										echo '<input type="submit" class="song" name="song" value='.$row['Title'].'/>';
									}
								}
							}
					?>
				</form>
			</div>
			</div>
		</div>
	</section>
	
	<?php include 'includes/footer.php';?>
</body>
</html>