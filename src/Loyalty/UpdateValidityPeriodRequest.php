<?php

namespace Y2\Loyalty;

class UpdateValidityPeriodRequest
{

    protected string $LoyaltyCardId;

    protected ValidityPeriod $ValidityPeriod;

    public function __construct(string $LoyaltyCardId, ValidityPeriod $ValidityPeriod)
    {
        $this->LoyaltyCardId = $LoyaltyCardId;
        $this->ValidityPeriod = $ValidityPeriod;
    }

    public function getLoyaltyCardId(): string
    {
        return $this->LoyaltyCardId;
    }

    public function setLoyaltyCardId(string $LoyaltyCardId): void
    {
        $this->LoyaltyCardId = $LoyaltyCardId;
    }

    public function getValidityPeriod(): ValidityPeriod
    {
        return $this->ValidityPeriod;
    }

    public function setValidityPeriod(ValidityPeriod $ValidityPeriod): void
    {
        $this->ValidityPeriod = $ValidityPeriod;
    }

}