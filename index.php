<?php

require "vendor/autoload.php";

use OizumiJunho\PDF\PDF;

$html = "<h1 style='color: red;background: #000;'>Teste</h1>";

PDF::ExePDF($html);