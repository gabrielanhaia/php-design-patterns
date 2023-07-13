<?php

namespace App\Interpreter;

use App\Interpreter\Component\BlogPostRepository;

class AuthorSearch implements Expression {
    private BlogPostRepository $blogPostRepository;

    public function __construct(BlogPostRepository $blogPostRepository) {
        $this->blogPostRepository = $blogPostRepository;
    }

    public function interpret(string $context): array {
        return $this->blogPostRepository->findByAuthor($context);
    }
}