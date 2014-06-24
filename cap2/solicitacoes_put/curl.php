<?php

$url = "http://localhost/web_services/cap2/solicitacoes_put/put.php";
$data = array(
	"email" 		=> "victor@gmail.com",
	"display_name"	=> "Victor mag"
);

$request = new HttpRequest($url, HTTP_METH_PUT);
$request->setHeaders(
	array(
		"Content-Type" => "application/x-www-form-unlercode"
	)
);
$request->setPutData(http_build_query($data));
$request->send();
$page = $request->getResponseBody();
echo $page;