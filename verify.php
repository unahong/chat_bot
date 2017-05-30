<?php
$access_token = 'FwAFhFr1gV9AJip1HvuAOuKrEtfUCgfxTmFuxuhqnY4scGcPIt6kWgX9ORmLSBEkCr+yUHne2P7cPR/Gz6Q9O6wi9wRrSpEJXClH7Ob4Wq5CscT348Q41aKPMDc8uzWiE1q4p/XXrxPPXZiFJzxuBwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
