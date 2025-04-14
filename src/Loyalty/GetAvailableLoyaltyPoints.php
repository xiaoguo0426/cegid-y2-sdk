<?php

namespace Y2\Loyalty;

class GetAvailableLoyaltyPoints
{

    protected string $loyaltyCardId;

    protected $clientContext = null;

    public function __construct(string $loyaltyCardId, $clientContext)
    {
        $this->loyaltyCardId = $loyaltyCardId;
        $this->clientContext = $clientContext;
    }

    public function getLoyaltyCardId(): string
    {
        return $this->loyaltyCardId;
    }

    public function setLoyaltyCardId(string $loyaltyCardId): void
    {
        $this->loyaltyCardId = $loyaltyCardId;
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