<?php

    $url = "http://requestb.in/1hqu1e01";
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    print_r($result);
    curl_close($ch);


?>