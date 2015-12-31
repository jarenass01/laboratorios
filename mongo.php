<?php
$url='https://api.bitbucket.org/1.0/user/';

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC ); 
    curl_setopt($curl, CURLOPT_USERPWD, "username:password");
    curl_setopt($curl, CURLOPT_HEADER, true); 
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL, $url);

    curl_exec($curl);

?>