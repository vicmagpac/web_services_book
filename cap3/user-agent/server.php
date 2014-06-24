<?php 
	echo "this request made by: " . filter_var($_SERVER['HTTP_USER_AGENT'], FILTER_SANITIZE_STRING);
?>