# Objetivo
Criado para facilitar a geração de PDF

# Requisitos
PHP: Versão 7 ou acima | oizumi-junho/pdf-php: Qualquer versão

# Configuração do arquivo composer.json

```

    "require": {
        "oizumi-junho/pdf-php": "dev-master",
        "dompdf/dompdf": "1.2.0",
        "php": ">=7.0"
    }

```

# Exemplo de uso

```

<?php

require "vendor/autoload.php";

use OizumiJunho\PDF\PDF;

$html = "<div style='width:300px;margin: 0 auto;background: #000;text-align: center;'><a href='https://www.google.com/' target='_blank' style='color: #fff;'>Teste</a></div>";

PDF::ExePDF($html);

```