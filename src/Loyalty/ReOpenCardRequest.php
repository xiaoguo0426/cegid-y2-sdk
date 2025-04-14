<?php

namespace Y2\Loyalty;

class ReOpenCardRequest
{
    protected string $Comment;

    protected string $LoyaltyCardId;

    protected string $Reason;

    protected ValidityPeriod $ValidityPeriod;

    public function __construct(string $Comment, string $LoyaltyCardId, string $Reason, ValidityPeriod $ValidityPeriod)
    {
        $this->Comment = $Comment;
        $this->LoyaltyCardId = $LoyaltyCardId;
        $this->Reason = $Reason;
        $this->ValidityPeriod = $ValidityPeriod;

    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->Comment;
    }

    /**
     * @param $Comment
     * @return void
     */
    public function setComment($Comment): void
    {
        $this->Comment = $Comment;
    }

    /**
     * @return string
     */
    public function getLoyaltyCardId(): string
    {
        return $this->LoyaltyCardId;
    }

    /**
     * @param $LoyaltyCardId
     * @return void
     */
    public function setLoyaltyCardId($LoyaltyCardId): void
    {
        $this->LoyaltyCardId = $LoyaltyCardId;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->Reason;
    }

    /**
     * @param $Reason
     * @return void
     */
    public function setReason($Reason): void
    {
        $this->Reason = $Reason;
    }

}