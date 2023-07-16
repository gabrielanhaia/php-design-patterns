<?php

use App\Bridge\HomePage;
use App\Bridge\AboutPage;
use App\Bridge\DarkTheme;
use App\Bridge\LightTheme;

require_once 'autoloader.php';

$darkTheme = new DarkTheme();
$homePage = new HomePage($darkTheme);
echo $homePage->getContent();

ln();

$lightTheme = new LightTheme();
$aboutPage = new AboutPage($lightTheme);
echo $aboutPage->getContent();