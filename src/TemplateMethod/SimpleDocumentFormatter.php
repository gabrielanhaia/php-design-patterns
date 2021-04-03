<?php

declare(strict_types=1);

namespace App\TemplateMethod;

use App\TemplateMethod\Component\Document;

class SimpleDocumentFormatter extends DocumentFormatter
{
    public function formatHeader(Document $document): void
    {
        $newHeader = 'SIMPLE HEADER: ' . $document->getHeader();

        $document->setHeader($newHeader);
    }

    public function formatBody(Document $document): void
    {
        $newBody = 'SIMPLE BODY: ' . $document->getBody();

        $document->setBody($newBody);
    }
}