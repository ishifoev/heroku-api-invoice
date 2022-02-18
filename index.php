<?php

$url = "https://api.heroku.com/account/invoices";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/vnd.heroku+json; version=3",
   "Authorization: Bearer 204bb74b-b82d-4b88-a63b-ea01c0890da2",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
echo '<pre>';
var_export(json_decode($resp));
echo '</pre>';

?>

