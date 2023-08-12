<?php

require_once "vendor/autoload.php";

use Mariolucas\CepDigital\Search;

$search = new Search();

$result = $search->getAddressFromZipCode('56280000');

print_r($result);
