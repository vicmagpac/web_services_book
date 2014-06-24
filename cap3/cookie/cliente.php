<?php

$url = "http://localhost/web_services/cap3/cookie/server.php";
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_COOKIE, "visited=true");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);