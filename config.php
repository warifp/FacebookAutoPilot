<?php 
	session_start();

	$appId = ''; // Mausukkan appID yang ada di Facebook Developer
	$appSecret = ''; // Masukkan appSecret yang ada di Facebook Developer
	$requiredPermissions = 'public_profile, publish_to_groups, publish_pages'; 
	$redirectURL = ''; // Masukkan URL URI yang kalian daftarkan di Facebook Apps Developer
 	
 	$minDelayTime = 20; // Set minimal delay pada request api
	$maxDelayTime = 40; // Set maximal delay pada request api
	$maxGroups = 1; // Set maximal post digrup.
?>