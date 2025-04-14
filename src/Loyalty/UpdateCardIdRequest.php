<?php

namespace Y2\Loyalty;

class UpdateCardIdRequest
{

    protected string $LoyaltyCardId;
    protected string $NewLoyaltyCardId;

    public function __construct(string $LoyaltyCardId, string $NewLoyaltyCardId)
    {
        $this->LoyaltyCardId = $LoyaltyCardId;
        $this->NewLoyaltyCardId = $NewLoyaltyCardId;
    }

    public function getLoyaltyCardId(): string
    {
        return $this->LoyaltyCardId;
    }

    public function setLoyaltyCardId(string $LoyaltyCardId): void
    {
        $this->LoyaltyCardId = $LoyaltyCardId;
    }

    public function getNewLoyaltyCardId(): string
    {
        return $this->NewLoyaltyCardId;
    }

    public function setNewLoyaltyCardId(string $NewLoyaltyCardId): void
    {
        $this->NewLoyaltyCardId = $NewLoyaltyCardId;
    }

}