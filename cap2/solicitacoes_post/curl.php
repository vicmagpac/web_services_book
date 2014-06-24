<?php

$url = "http://localhost/web_services/cap2/solicitacoes_post/form.php";
$data = array(
	"email" => "victor.magalhaesp@gmail.com",
	"nome"	=> "Victor"
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);
echo $server_output;

curl_close ($ch);