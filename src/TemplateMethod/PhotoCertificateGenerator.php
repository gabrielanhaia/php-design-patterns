<?php

declare(strict_types=1);

namespace App\TemplateMethod;

use App\TemplateMethod\Component\StudentDto;

/**
 * Class PhotoCertificateGenerator
 * @package App\TemplateMethod
 */
class PhotoCertificateGenerator extends CertificateGenerator
{
    protected function generateCertificate(StudentDto $studentDto): string
    {
        $completedAt = $studentDto->getCompletedAt()->format('Y-m-d');

        $this->notifyStudentBySms($studentDto->getPhoneNumber(), $studentDto->getName());

        return "[PHOTOGRAPHY] Student {$studentDto->getName()} completed the course {$studentDto->getCourseName()} on {$completedAt}";
    }

    protected function sendCertificateByEmail(StudentDto $studentDto, string $certificateString): void
    {
        dump("Email sent to {$studentDto->getEmail()} with certificate: {$certificateString}");

        $this->notifyStudentBySms($studentDto->getPhoneNumber(), $studentDto->getName());
    }
}