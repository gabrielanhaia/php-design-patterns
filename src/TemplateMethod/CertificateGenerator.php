<?php

declare(strict_types=1);

namespace App\TemplateMethod;

use App\TemplateMethod\Component\StudentDto;

/**
 * Class CertificateGenerator
 * @package App\TemplateMethod
 */
abstract class CertificateGenerator
{
    /**
     * Method responsible for processing all the steps related to the certificate generation.
     *
     * @param StudentDto $studentDto
     */
    public function processCertificateFlow(StudentDto $studentDto): void
    {
        $certificate = $this->generateCertificate($studentDto);
        $this->sendCertificateByEmail($studentDto, $certificate);
    }

    protected abstract function generateCertificate(StudentDto $studentDto): string;

    protected abstract function sendCertificateByEmail(StudentDto $studentDto, string $certificateString): void;

    public function notifyStudentBySms(int $phoneNumber, string $studentName) {
        // This is just a simulation.
        dump("SMS message sent to {$phoneNumber}: Hello {$studentName}, you certificate was generated.");
    }
}