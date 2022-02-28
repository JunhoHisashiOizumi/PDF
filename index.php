<?php

require "vendor/autoload.php";

use OizumiJunho\PDF\PDF;

$html = "<div style='width:300px;margin: 0 auto;background: #000;text-align: center;'><a href='https://www.google.com/' target='_blank' style='color: #fff;'>Teste</a></div>";

PDF::ExePDF($html);