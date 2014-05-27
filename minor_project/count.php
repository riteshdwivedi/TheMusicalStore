<?php
	echo $ip_addr = $_SERVER['REMOTE_ADDR'];

	function hit_count(){
		$ip_file = file('ip.txt');
		foreach($ip_file as $ip){
			$ip_new = trim($ip).',';
			if($ip_address==$ip_new){
				$found = false;
				break;
			}
			else{
				$found = true;
				break;
			}
			
			if($found==trim){
				echo "found";
			}
		}
	}
?>