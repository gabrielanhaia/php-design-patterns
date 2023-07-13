<?php

namespace App\Interpreter;

use App\Interpreter\Component\BlogPostRepository;

class SearchQueryInterpreter
{
    private BlogPostRepository $blogPostRepository;

    public function __construct(BlogPostRepository $blogPostRepository)
    {
        $this->blogPostRepository = $blogPostRepository;
    }

    /**
     * @throws \Exception
     */
    public function interpret(string $query): array
    {
        // The query format is "TYPE:CONTEXT"
        $elements = explode(':', $query, 2);
        $type = $elements[0];
        $context = $elements[1] ?? '';

        switch ($type) {
            case 'title':
                $expression = new TitleSearch($this->blogPostRepository);
                break;
            case 'author':
                $expression = new AuthorSearch($this->blogPostRepository);
                break;
            case 'date':
                $expression = new DateSearch($this->blogPostRepository);
                break;
            default:
                throw new \Exception("Invalid search type: $type");
        }

        return $expression->interpret($context);
    }
}
