<?php 
	session_start();

	$appId = '165210707507361'; 
	$appSecret = 'e0b6dc2d747efe1e7d6546e66337f2d3';
	$requiredPermissions = 'public_profile, publish_actions, user_groups'; 
	$redirectURL = 'http://localhost'; // FB will redirect to this page with a code
 	
 	$minDelayTime = 20; // Set the min delay in seconds between api requests
	$maxDelayTime = 40; // Set the max delay in seconds between api requests
	$maxGroups = 1; // Set the max amount of groups to post to
?>