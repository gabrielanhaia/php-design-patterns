<?php

namespace App\Interpreter\Component;

/**
 * This class was created just to make the example work.
 * It is not part of the Interpreter pattern, and it is not a full implementation of a repository pattern.
 */
class BlogPostRepository {
    private array $blogPosts;

    public function __construct() {
        $this->blogPosts = [
            new BlogPost('My Blog Post', 'John Doe', new \DateTime('2023-07-01')),
            new BlogPost('Another Blog Post', 'Jane Doe', new \DateTime('2023-07-02')),
            new BlogPost('Yet Another Blog Post', 'John Doe', new \DateTime('2023-07-03')),
        ];
    }

    public function findByTitle(string $title): array {
        return array_filter($this->blogPosts, function(BlogPost $blogPost) use ($title) {
            return $blogPost->title === $title;
        });
    }

    public function findByAuthor(string $author): array {
        return array_filter($this->blogPosts, function(BlogPost $blogPost) use ($author) {
            return $blogPost->author === $author;
        });
    }

    public function findByDate(\DateTimeInterface $date): array {
        return array_filter($this->blogPosts, function(BlogPost $blogPost) use ($date) {
            return $blogPost->date->format('Y-m-d') === $date->format('Y-m-d');
        });
    }
}
