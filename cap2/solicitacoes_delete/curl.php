<?php

$url = "http://localhost/web_services/cap2/solicitacoes_delete/delete.php";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_exec($ch);