<?php

declare(strict_types=1);

namespace App\TemplateMethod;

use App\TemplateMethod\Component\Document;

class CustomDocumentFormatter extends DocumentFormatter
{

    public function formatHeader(Document $document): void
    {
        $newHeader = 'CUSTOM HEADER: ' . $document->getHeader();

        $document->setHeader($newHeader);
    }

    public function formatBody(Document $document): void
    {
        $newBody = 'CUSTOM BODY: ' . $document->getBody();

        $document->setBody($newBody);
    }

    public function formatFooter(Document $document): void
    {
        $newFooter = 'CUSTOM FOOTER: ' . $document->getFooter();

        $document->setFooter($newFooter);
    }
}