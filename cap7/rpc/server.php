<?php

require_once 'Library.php';
$lib = new Library();

if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'retornaNomes' :
			$data = $lib->retornaNomes();
			break;
		case 'retornaIdades' :
			$data = $lib->retornaIdades();
			break;
		default:
			//http_response_code(400);
			$data = array("error" => "Bad request");
			break;
	}

	header("Content-Type: application/json");
	echo json_encode($data);
}