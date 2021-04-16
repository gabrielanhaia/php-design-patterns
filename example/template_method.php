<?php

use App\TemplateMethod\Component\StudentDto;
use App\TemplateMethod\DevCertificateGenerator;

require_once 'autoloader.php';

$coursesAvailable = [
    'php_8' => 'Building Applications with PHP 8',
    'social_media_marketing' => 'Social Media Marketing',
    'photo_masterclass' => 'Photography Masterclass'
];

$student = new StudentDto(
    'Gabriel Anhaia',
    $coursesAvailable['php_8'],
    new \DateTimeImmutable(),
    'gabriel@anhaia.com',
    123456789
);

// A Factory can be implemented here, but this is not the purpose of this example.
switch ($student->getCourseName()) {
    case $coursesAvailable['php_8']:
        $template = new DevCertificateGenerator;
        break;
    default:
        throw new \Exception('Course does not have a template for Certificate flow.');
}

$template->processCertificateFlow($student);