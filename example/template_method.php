<?php

use App\TemplateMethod\Component\Document;
use App\TemplateMethod\CustomDocumentFormatter;
use App\TemplateMethod\SimpleDocumentFormatter;

require_once 'autoloader.php';

$document1 = new Document();
$document1->setHeader('[HEADER HERE]')
    ->setBody('[BODY HERE]')
    ->setFooter('[FOOTER HERE]');

$document2 = clone $document1;

$simpleDocumentFormatter = new SimpleDocumentFormatter();
$customDocumentFormatter = new CustomDocumentFormatter();

$simpleDocumentFormatter->formatDocument($document1);
$customDocumentFormatter->formatDocument($document2);

dump($document1);
dump($document2);