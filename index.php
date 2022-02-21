<?php

require_once __DIR__ . '/vendor/autoload.php';

use Ishifoev\HerokuApi\HerokuGenerateJson;

$json = new HerokuGenerateJson;
$json->generateApiJson();

?>

