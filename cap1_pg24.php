<?php

    $url = "http://requestb.in/1hqu1e01";
    $data =  array("name" => "Victor", "email" => "victor@gmail.com");
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result =  curl_exec($ch);
    curl_close($ch);

?>