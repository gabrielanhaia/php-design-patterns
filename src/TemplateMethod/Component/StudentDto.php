<?php

declare(strict_types=1);

namespace App\TemplateMethod\Component;

/**
 * Class StudentDto
 * @package App\TemplateMethod
 */
class StudentDto
{
    private string $name;
    private string $courseName;
    private \DateTimeImmutable $completedAt;
    private string $email;
    private int $phoneNumber;

    public function __construct(
        string $name,
        string $courseName,
        \DateTimeImmutable $completedAt,
        string $email,
        int $phoneNumber
    )
    {
        $this->name = $name;
        $this->courseName = $courseName;
        $this->completedAt = $completedAt;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCourseName(): string
    {
        return $this->courseName;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCompletedAt(): \DateTimeImmutable
    {
        return $this->completedAt;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getPhoneNumber(): int
    {
        return $this->phoneNumber;
    }
}