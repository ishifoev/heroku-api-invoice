<?php

require_once __DIR__ . '/vendor/autoload.php';

use Ishifoev\HerokuApi\HerokuClient;

$heroku = new HerokuClient([
   'apiKey' => 'YOUR_API_HERE',
]);

$invoice = $heroku->get('account/invoices');
echo '<pre>';
var_export($invoice);
echo '</pre>';
file_put_contents("invoice.json", json_encode($invoice, JSON_PRETTY_PRINT));
?>

