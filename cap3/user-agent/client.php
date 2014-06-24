<?php 
	$url = "http://localhost/web_services/cap3/user-agent/server.php";
	$options = array(
		"http" => array(
			"header" => "User-Agent: Advanced HTTP magic Client"
		)
	);

	$page = file_get_contents($url, false, stream_context_create($options));
	echo $page;
?>