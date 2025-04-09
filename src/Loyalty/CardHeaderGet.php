<?php

namespace Y2\Loyalty;

class CardHeaderGet
{
    protected $ActivationDate;

    protected $Active;

    protected $AvailableLoyaltyPoints;

    protected $BenefitEnable;

    protected $BenefitExpiracyDate;

    protected $Closed;

    protected $CustomerId;

    protected $ExpiracyDate;

    protected $Id;

    protected $Program;

    protected $StoreId;

    /**
     * @return mixed
     */
    public function getActivationDate()
    {
        return $this->ActivationDate;
    }

    /**
     * @param mixed $ActivationDate
     */
    public function setActivationDate($ActivationDate): void
    {
        $this->ActivationDate = $ActivationDate;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param mixed $Active
     */
    public function setActive($Active): void
    {
        $this->Active = $Active;
    }

    /**
     * @return mixed
     */
    public function getAvailableLoyaltyPoints()
    {
        return $this->AvailableLoyaltyPoints;
    }

    /**
     * @param mixed $AvailableLoyaltyPoints
     */
    public function setAvailableLoyaltyPoints($AvailableLoyaltyPoints): void
    {
        $this->AvailableLoyaltyPoints = $AvailableLoyaltyPoints;
    }

    /**
     * @return mixed
     */
    public function getBenefitEnable()
    {
        return $this->BenefitEnable;
    }

    /**
     * @param mixed $BenefitEnable
     */
    public function setBenefitEnable($BenefitEnable): void
    {
        $this->BenefitEnable = $BenefitEnable;
    }

    /**
     * @return mixed
     */
    public function getBenefitExpiracyDate()
    {
        return $this->BenefitExpiracyDate;
    }

    /**
     * @param mixed $BenefitExpiracyDate
     */
    public function setBenefitExpiracyDate($BenefitExpiracyDate): void
    {
        $this->BenefitExpiracyDate = $BenefitExpiracyDate;
    }

    /**
     * @return mixed
     */
    public function getClosed()
    {
        return $this->Closed;
    }

    /**
     * @param mixed $Closed
     */
    public function setClosed($Closed): void
    {
        $this->Closed = $Closed;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param mixed $CustomerId
     */
    public function setCustomerId($CustomerId): void
    {
        $this->CustomerId = $CustomerId;
    }

    /**
     * @return mixed
     */
    public function getExpiracyDate()
    {
        return $this->ExpiracyDate;
    }

    /**
     * @param mixed $ExpiracyDate
     */
    public function setExpiracyDate($ExpiracyDate): void
    {
        $this->ExpiracyDate = $ExpiracyDate;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id): void
    {
        $this->Id = $Id;
    }

    /**
     * @return ProgramCardGet $Program
     */
    public function getProgram()
    {
        return $this->Program;
    }

    /**
     * @param ProgramCardGet $Program
     * @return void
     */
    public function setProgram($Program): void
    {
        $this->Program = $Program;
    }

    /**
     * @return mixed
     */
    public function getStoreId()
    {
        return $this->StoreId;
    }

    /**
     * @param mixed $StoreId
     */
    public function setStoreId($StoreId): void
    {
        $this->StoreId = $StoreId;
    }

}