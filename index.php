<?php

require_once __DIR__ . '/vendor/autoload.php';

use Ishifoev\HerokuApi\HerokuClient;

$heroku = new HerokuClient([
   'apiKey' => '204bb74b-b82d-4b88-a63b-ea01c0890da2',
]);

$invoice = $heroku->get('account/invoices');
echo '<pre>';
var_export($invoice);
echo '</pre>';
file_put_contents("invoice.json", json_encode($invoice, JSON_PRETTY_PRINT));
?>

