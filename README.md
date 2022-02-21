## Heroku API PHP Client

### Requirements
- PHP 7.3+ or 8.x 

A PHP client for the Heroku Platform API working for Invoices, Account, Apps .etc

### Usage

For example you need to get information for get invoice from API heroku you need to use this. 

````php
use Ishifoev\HerokuApi\HerokuClient;

$heroku = new HerokuClient([
   'apiKey' => '204bb74b-b82d-4b88-a63b-ea01c0890da2',
]);
$invoice = $heroku->get('account/invoices');

echo '<pre>';
var_export($invoice);
echo '</pre>';
````