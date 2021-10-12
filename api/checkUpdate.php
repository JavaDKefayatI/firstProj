<?php

// From URL to get webpage contents.
include "../includes/Config_inc.php";

$url = Config_inc::getServer()."/server/api.php";

// Initialize a CURL session.
$ch = curl_init();

// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);

echo $result;


