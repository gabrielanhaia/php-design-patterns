<?php

declare(strict_types=1);

namespace App\TemplateMethod;

use App\TemplateMethod\Component\Document;

/**
 * Class DocumentFormatter
 * @package App\TemplateMethod
 */
abstract class DocumentFormatter
{
    public function formatDocument(Document $document)
    {
        $this->formatHeader($document);
        $this->formatBody($document);
        $this->formatFooter($document);
    }

    public abstract function formatHeader(Document $document): void;

    public abstract function formatBody(Document $document): void;

    public function formatFooter(Document $document): void
    {
    }
}