<?php

namespace Y2\Loyalty;

class UpdateProgramRequest
{
    protected $LoyaltyCardId = null;

    protected $ProgramId = null;

    public function getLoyaltyCardId(): string|null
    {
        return $this->LoyaltyCardId;
    }

    public function setLoyaltyCardId($LoyaltyCardId): void
    {
        $this->LoyaltyCardId = $LoyaltyCardId;
    }

    public function getProgramId(): string|null
    {
        return $this->ProgramId;
    }

    public function setProgramId($ProgramId): void
    {
        $this->ProgramId = $ProgramId;
    }
}