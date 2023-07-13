<?php

namespace App\Interpreter\Component;

/**
 * This class was created just to make the example work.
 * It is not part of the Interpreter patter.
 */
class BlogPost {
    public string $title;
    public string $author;
    public \DateTimeInterface $date;

    public function __construct(string $title, string $author, \DateTimeInterface $date) {
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
    }

    public function __toString() {
        return "Title: {$this->title}, Author: {$this->author}, Date: {$this->date->format('Y-m-d')}";
    }
}
