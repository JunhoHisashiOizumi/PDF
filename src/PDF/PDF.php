<?php

namespace OizumiJunho\PDF;

use Dompdf\Dompdf;

class PDF
{

    public static function ExePDF($html)
    {

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'landscape');

        $dompdf->render();

        $dompdf->stream();
    }
}
