<?php

namespace Y2\Loyalty;

use Y2\Customer\RetailContext;

class CreateLoyaltyCard
{
    protected $customerReference = null;

    protected $storeId = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;
    public function __construct($customerReference, $storeId, $clientContext){
        $this->customerReference = $customerReference;
        $this->storeId = $storeId;
        $this->clientContext = $clientContext;
    }

    public function getCustomerReference(): null
    {
        return $this->customerReference;
    }

    public function setCustomerReference(null $customerReference): void
    {
        $this->customerReference = $customerReference;
    }

    public function getStoreId(): null
    {
        return $this->storeId;
    }

    public function setStoreId(null $storeId): void
    {
        $this->storeId = $storeId;
    }

    public function getClientContext(): ?RetailContext
    {
        return $this->clientContext;
    }

    public function setClientContext(?RetailContext $clientContext): void
    {
        $this->clientContext = $clientContext;
    }
}