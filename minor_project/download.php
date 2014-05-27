<?php
	header('Content-Type: application/download');
	header('Content-Disposition: attachment; filename="./music/hip_hop/audio/1 2 3 4.mp3"');
	header("Content-Length: " . filesize("./music/hip_hop/audio/1 2 3 4.mp3"));
	$fp = fopen("./music/hip_hop/audio/1 2 3 4.mp3", "r");
	fpassthru($fp);
	fclose($fp);
?>