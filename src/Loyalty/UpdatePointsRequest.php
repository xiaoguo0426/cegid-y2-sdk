<?php

namespace Y2\Loyalty;

class UpdatePointsRequest
{
    protected string $Comment;

    protected string $Date;

    protected string $LineType;

    protected string $LoyaltyCardId;

    protected float $Points;

    protected string $ProgramId;

    protected string $ReasonId;

    protected string $StoreId;

    public function __construct(string $Comment, string $Date, string $LineType, string $LoyaltyCardId, float $Points, string $ProgramId, string $ReasonId, string $StoreId)
    {
        $this->Comment = $Comment;
        $this->Date = $Date;
        $this->LineType = $LineType;
        $this->LoyaltyCardId = $LoyaltyCardId;
        $this->Points = $Points;
        $this->ProgramId = $ProgramId;
        $this->ReasonId = $ReasonId;
        $this->StoreId = $StoreId;
    }

    public function getComment(): string
    {
        return $this->Comment;
    }

    public function setComment(string $Comment): void
    {
        $this->Comment = $Comment;
    }

    public function getStoreId(): string
    {
        return $this->StoreId;
    }

    public function setStoreId(string $StoreId): void
    {
        $this->StoreId = $StoreId;
    }

    public function getReasonId(): string
    {
        return $this->ReasonId;
    }

    public function setReasonId(string $ReasonId): void
    {
        $this->ReasonId = $ReasonId;
    }

    public function getProgramId(): string
    {
        return $this->ProgramId;
    }

    public function setProgramId(string $ProgramId): void
    {
        $this->ProgramId = $ProgramId;
    }

    public function getPoints(): float
    {
        return $this->Points;
    }

    public function setPoints(float $Points): void
    {
        $this->Points = $Points;
    }

    public function getLoyaltyCardId(): string
    {
        return $this->LoyaltyCardId;
    }

    public function setLoyaltyCardId(string $LoyaltyCardId): void
    {
        $this->LoyaltyCardId = $LoyaltyCardId;
    }

    public function getLineType(): string
    {
        return $this->LineType;
    }

    public function setLineType(string $LineType): void
    {
        $this->LineType = $LineType;
    }

    public function getDate(): string
    {
        return $this->Date;
    }

    public function setDate(string $Date): void
    {
        $this->Date = $Date;
    }
}