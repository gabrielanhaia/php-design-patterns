<?php

namespace App\Observer\Component;

class Invoice
{
    private int $invoiceNumber;

    private float $invoiceAmount;

    private string $state;

    private string $customerEmailAddress;

    public function __construct(int $invoiceNumber, float $invoiceAmount, string $state, string $customerEmailAddress)
    {
        $this->invoiceNumber = $invoiceNumber;
        $this->invoiceAmount = $invoiceAmount;
        $this->state = $state;
        $this->customerEmailAddress = $customerEmailAddress;
    }

    public function getInvoiceNumber(): int
    {
        return $this->invoiceNumber;
    }

    public function getInvoiceAmount(): float
    {
        return $this->invoiceAmount;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getCustomerEmailAddress(): string
    {
        return $this->customerEmailAddress;
    }

    public function setInvoiceNumber(int $invoiceNumber): Invoice
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    public function setInvoiceAmount(float $invoiceAmount): Invoice
    {
        $this->invoiceAmount = $invoiceAmount;
        return $this;
    }

    public function setState(string $state): Invoice
    {
        $this->state = $state;
        return $this;
    }

    public function setCustomerEmailAddress(string $customerEmailAddress): Invoice
    {
        $this->customerEmailAddress = $customerEmailAddress;
        return $this;
    }
}