<?php

require_once __DIR__ . '/vendor/autoload.php';

use Ishifoev\HerokuApi\HerokuClient;

$heroku = new HerokuClient([
   'apiKey' => 'YOUR_API_HERE',
]);

//Account information
$account = $heroku->get('account');
echo '<pre>';
var_export($account);
echo '</pre>';

file_put_contents("account.json", json_encode($account, JSON_PRETTY_PRINT));

//Invoice information
$invoice = $heroku->get('account/invoices');
echo '<pre>';
var_export($invoice);
echo '</pre>';
file_put_contents("invoice.json", json_encode($invoice, JSON_PRETTY_PRINT));

//Invoice address
$invoice_address = $heroku->get('account/invoice-address');
echo '<pre>';
var_export($invoice_address);
echo '</pre>';
file_put_contents("invoice_address.json", json_encode($invoice_address, JSON_PRETTY_PRINT));

?>

