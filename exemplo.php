<?php

require_once "vendor/autoload.php";

use sobre\digitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('58824000');

print_r($resultado);