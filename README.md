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

$html = "<h1 style='color: red;background: #000;'>Teste</h1>";

PDF::ExePDF($html);

```