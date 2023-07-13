<?php

use App\Interpreter\Component\BlogPostRepository;
use App\Interpreter\SearchQueryInterpreter;

require_once 'autoloader.php';

$blogPostRepository = new BlogPostRepository();
$interpreter = new SearchQueryInterpreter($blogPostRepository);

ln();
lns();
ln();
echo "Search by title: 'My Blog Post'";
ln();

$posts = $interpreter->interpret('title:My Blog Post');
// $posts now contains an array of BlogPost objects with the title 'My Blog Post'
foreach ($posts as $post) {
    echo $post;
    ln();
}

lns();
ln();
echo "Search by author: 'John Doe'";
ln();

$posts = $interpreter->interpret('author:John Doe');
// $posts now contains an array of BlogPost objects written by 'John Doe'
foreach ($posts as $post) {
    echo $post;
    ln();
}

lns();
ln();
echo "Search by date: '2023-07-01'";
ln();

$posts = $interpreter->interpret('date:2023-07-01');
// $posts now contains an array of BlogPost objects published on 2023-07-01
foreach ($posts as $post) {
    echo $post;
    ln();
}
