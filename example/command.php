<?php

use App\Command\{CreatePostCommand, UpdatePostCommand, DeletePostCommand, PostManager};
use App\Command\Component\Post;

require_once 'autoloader.php';

$post = new Post('My first post', 'Hello world!');
$manager = new PostManager();
lns();ln();

$createPostCommand = new CreatePostCommand($post);
$manager->setCommand($createPostCommand);
$manager->executeCommand();

ln();

$updatePostCommand = new UpdatePostCommand($post, 'My first post! Updated', 'Hello world! Updated!');
$manager->setCommand($updatePostCommand);
$manager->executeCommand();

ln();

$deletePostCommand = new DeletePostCommand($post);
$manager->setCommand($deletePostCommand);
$manager->executeCommand();


