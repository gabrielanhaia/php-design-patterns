<?php

namespace App\Prototype;

abstract class BookPrototype
{
    protected string $title;

    protected string $subject;

    protected string $authorName;

    abstract public function __clone();

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): BookPrototype
    {
        $this->title = $title;
        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): BookPrototype
    {
        $this->subject = $subject;
        return $this;
    }

    public function getAuthorName(): string
    {
        return $this->authorName;
    }

    public function setAuthorName(string $authorName): BookPrototype
    {
        $this->authorName = $authorName;
        return $this;
    }
}