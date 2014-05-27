<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home</title>
        
        <link rel="stylesheet" type="text/css" href="./home_files/main.css">   
        <link rel="stylesheet" type="text/css" href="./home_files/frame.css">   
    </head>
                
    <body>
		<?php include './includes/header.php';?>
		<?php include './includes/nav.php';?>
		
		<aside id="main_aside">
			<article id="article1">
				<p>Aside of this page</p>
			</article>
		</aside>
	
		<section id="main_section">
			<p id="welcome_para">Welcome to The Musical Store.</p1>
			<p><center></center></p>
			<div class="row">
				<form action="wow.php" method="post">
					<h1><a href="wow.php">Music</a><h1>
					<div class="col">
						<div class="genre"><img src="./images/Jazz.jpg" class="genre_img"><span class="genre_name"><input type="submit" name="submit" value="Jazz"></span></div>
						<div class="genre"><img src="./images/hip_hop.jpg" class="genre_img"><span class="genre_name"><input type="submit" name="submit" value="Hip Hop"></span></div>
						<div class="genre"><img src="./images/Rock.jpg" class="genre_img"><span class="genre_name"><input type="submit" name="submit" value="Rock"></span></div>
					</div>
					<div class="col">
						<div class="genre"><img src="./images/Rap.jpg" class="genre_img"><span class="genre_name"><input type="submit" name="submit" value="Rap"></span></div>
						<div class="genre"><img src="./images/Blues.jpg" class="genre_img"><span class="genre_name"><input type="submit" name="submit" value="Blues"></span></div>
						<div class="genre"><img src="./images/Folk.jpg" class="genre_img"><span class="genre_name"><input type="submit" name="submit" value="Folk"></span></div>
					</div>
				</form>
			</div>
			<div class="row">
				<h1><a href="inst.htm">Intruments</a><h1>
				<div class="col">
					<div class="genre"><a href="skin_instruments.htm"><img src="./images/Drums.jpg" class="genre_img"><span class="genre_name">Membranophones</span></a></div>
					<div class="genre"><a href="string_instruments.htm"><img src="./images/voilin.jpg" class="genre_img"><span class="genre_name">String Instruments</span></a></div>
					<div class="genre"><a href="wind_instruments.htm"><img src="./images/Saxophone.jpg" class="genre_img"><span class="genre_name">Wind Instruments<span></a></div>
				</div>
			</div>
		</section>
			
		<?php include './includes/footer.php';?>
	</body>
</html>