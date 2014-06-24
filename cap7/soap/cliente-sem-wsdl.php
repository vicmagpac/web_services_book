<?php

$options = array(
	'location' 	=> 'http://localhost/web_services/cap7/soap/server-sem-wsdl.php',
	'uri'		=> 'http://localhost'
);

try {
	$client = new SoapClient(null, $options);
	$nomes = $client->retornaNomes();
	print_r($nomes);
} catch (SoapFault $e) {
	var_dump($e);
}