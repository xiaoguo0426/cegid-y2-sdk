<?php

namespace Y2\Loyalty;

class CustomerCardsRequest
{
    protected bool|null $ActiveCards;

    protected string|null $CustomerId;

    protected string|null $CustomerReference;

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

    public function getCustomerId(): string|null
    {
        return $this->CustomerId;
    }

    public function setCustomerId(string $CustomerId): void
    {
        $this->CustomerId = $CustomerId;
    }

    public function getCustomerReference(): string|null
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