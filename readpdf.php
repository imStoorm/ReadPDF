<?php

require './vendor/autoload.php';

$parser = new \Smalot\PdfParser\Parser();
$pdf = $parser->parseFile('file.pdf');

$text= $pdf->getText();
$lines = explode("\n", $text);

foreach ($lines as $index => &$line) {
    $data = explode("\t", $line);
}
