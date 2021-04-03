<?php

declare(strict_types=1);

namespace App\TemplateMethod\Component;

class Document
{
    private string $header;

    private string $body;

    private string $footer;

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @param string $header
     * @return Document
     */
    public function setHeader(string $header): Document
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return Document
     */
    public function setBody(string $body): Document
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return string
     */
    public function getFooter(): string
    {
        return $this->footer;
    }

    /**
     * @param string $footer
     * @return Document
     */
    public function setFooter(string $footer): Document
    {
        $this->footer = $footer;
        return $this;
    }


}