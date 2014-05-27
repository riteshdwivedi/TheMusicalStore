<!DOCTYPE html>
<html>
	<head>
		<title>Music</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" type="text/css" href="home_files/frame.css"> 
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
	</head>
<body>
	<?php include 'includes/header.php';
		include 'includes/nav.php';
	?>
	
	<aside id="main_aside"></aside>
	<section id="main_section">
		
		<?php
			if(isset($_POST['submit'])){
				$genre=$_POST['submit'];
				session_start();
				$_SESSION['genre']=$genre;
			}
		?>
		
		<div class="row">
			<div id="col">
				<div id="wowslider-container1">
					<div class="ws_images">
						<ul>
							<li><img src="data1/images/musicwallpaper.jpg" alt="MUSIC" title="MUSIC" id="wows1_0"/>Play - Stream - Download</li>
							<li><img src="data1/images/2442.jpg" alt="2442" title="Play Your Favourites" id="wows1_1"/></li>
							<li><img src="data1/images/blues.jpg" alt="Blues" title="Blues" id="wows1_2"/></li>
							<li><img src="data1/images/jazz.jpg" alt="Jazz" title="Jazz" id="wows1_3"/>Play - Stream - Download</li>
							<li><img src="data1/images/hip_hop.jpg" alt="Hip Hop" title="Hip Hop" id="wows1_4"/></li>
							<li><img src="data1/images/rap.jpg" alt="Rap" title="Rap" id="wows1_5"/></li>
							<li><img src="data1/images/rock.jpg" alt="Rock" title="Rock" id="wows1_6"/></li>
							<li><img src="data1/images/folk.jpg" alt="Folk" title="Folk" id="wows1_7"/></li>
						</ul>
					</div>
					<div class="ws_thumbs">
						<div>
							<a href="#" title="MUSIC"><img src="data1/tooltips/musicwallpaper.jpg" alt="" /></a>
							<a href="#" title="2442"><img src="data1/tooltips/2442.jpg" alt="" /></a>
							<a href="#" title="Blues"><img src="data1/tooltips/blues.jpg" alt="" /></a>
							<a href="#" title="Jazz"><img src="data1/tooltips/jazz.jpg" alt="" /></a>
							<a href="#" title="Hip Hop"><img src="data1/tooltips/hip_hop.jpg" alt="" /></a>
							<a href="#" title="Rap"><img src="data1/tooltips/rap.jpg" alt="" /></a>
							<a href="#" title="Rock"><img src="data1/tooltips/rock.jpg" alt="" /></a>
							<a href="#" title="Folk"><img src="data1/tooltips/folk.jpg" alt="" /></a>
						</div>
					</div>
					<div class="ws_shadow"></div>
				</div>
			</div>
			
			<div class="col">
				<div class="genre" style="width:200px;border:none;"><span class="genre_name">Your favourites on your finger tips</span></div>
				<div class="genre"><a href="audio.php"><img src="images/audio.jpg" class="genre_img" ><span class="genre_name"></span></a></div>
				<div class="genre"><a href="video.php"><img src="images/videos.jpg" class="genre_img" ><span class="genre_name">Videos</span></a></div>
			</div>
		</div>
	</section>
	
	<?php include 'includes/footer.php';?>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
</body>
</html>