<?php
	require 'core.php';
	session_destroy();
	echo '<script>function goBack(){window.history.back()}goBack();</script>';
?>