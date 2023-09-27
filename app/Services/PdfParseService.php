<?php

namespace App\Services;

use Smalot\PdfParser\Parser;

class PdfParseService
{
    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function parser()
    {
        $parser = new Parser();
        $pdf = $parser->parseFile('storage/' . $this->file);
        $metaData = $pdf->getDetails();

        return (object) $metaData;
    }
}
