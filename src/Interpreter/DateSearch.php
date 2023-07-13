<?php

namespace App\Interpreter;

use App\Interpreter\Component\BlogPostRepository;

class DateSearch implements Expression
{
    private BlogPostRepository $blogPostRepository;

    public function __construct(BlogPostRepository $blogPostRepository)
    {
        $this->blogPostRepository = $blogPostRepository;
    }

    public function interpret(string $context): array
    {
        // Convert the string to a DateTime object
        $date = \DateTime::createFromFormat('Y-m-d', $context);

        return $this->blogPostRepository->findByDate($date);
    }
}