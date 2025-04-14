<?php

namespace Y2\Loyalty;

class GetCustomerAvailableLoyaltyPoints
{

    protected string $customerReference;

    protected $clientContext = null;

    public function __construct(string $customerReference, $clientContext)
    {
        $this->customerReference = $customerReference;
        $this->clientContext = $clientContext;
    }

    public function getCustomerReference(): string
    {
        return $this->customerReference;
    }

    public function setCustomerReference(string $customerReference): void
    {
        $this->customerReference = $customerReference;
    }

    public function getClientContext(): null
    {
        return $this->clientContext;
    }

    public function setClientContext(null $clientContext): void
    {
        $this->clientContext = $clientContext;
    }
}