<?php

namespace Y2\Loyalty;

class CustomerCardsRequest
{
    protected bool|null $ActiveCards;

    protected string $CustomerId;

    protected string $CustomerReference;

    protected string|null $StoreId;

    public function __construct($ActiveCards, $CustomerId, $CustomerReference, $StoreId)
    {
        $this->ActiveCards = $ActiveCards;
        $this->CustomerId = $CustomerId;
        $this->CustomerReference = $CustomerReference;
        $this->StoreId = $StoreId;
    }

    public function getActiveCards(): bool
    {
        return $this->ActiveCards;
    }

    public function setActiveCards(bool|null $ActiveCards): void
    {
        $this->ActiveCards = $ActiveCards;
    }

    public function getCustomerId(): null
    {
        return $this->CustomerId;
    }

    public function setCustomerId(null $CustomerId): void
    {
        $this->CustomerId = $CustomerId;
    }

    public function getCustomerReference(): string
    {
        return $this->CustomerReference;
    }

    public function setCustomerReference(string $CustomerReference): void
    {
        $this->CustomerReference = $CustomerReference;
    }

    public function getStoreId(): string|null
    {
        return $this->StoreId;
    }

    public function setStoreId(string|null $StoreId): void
    {
        $this->StoreId = $StoreId;
    }
}