<?php
	if(isset($_POST['submit'])){
		$genre=$_POST['submit'];
	}
?>

<!DOCTYPE HTML>
<html ln='en'>
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        
        <link rel="stylesheet" type="text/css" href="css/main.css">
        
        <title>Title Of the page</title>
	</head>
    <body>
		<?php include('includes/header.php') ?>
		<?php include('includes/nav.php') ?>
		
		<aside id="main_aside"></aside>
		<section id="main_section">
			<div>
				<div><img src=""></div>
				<div></div>
			</div>
			<?php
				error_reporting(0);
				$path='./music/';

				if(is_dir($path)) {
					if($dir=opendir($path)){
						while(($folder=readdir($dir))!==false){
							if((!($folder=='.'or $folder=='..'))&&($folder==$genre)){
									$filepath='./music/'.$folder.'/';
									if($filedir=opendir($filepath)){
										while(($file=readdir($filedir))!==false){
											if(!($file=='.'or $file=='..')){
												echo '<div id="type"><a href="'.$filepath.$file.'">'.$file.'</a></div>'."\n";
											}
										}
								}
							}
						}
						closedir($dh);
					}
				}
			?>
		</section>
		
		<?php include('includes/footer.php') ?>
</html>
