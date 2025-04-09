<?php

namespace Y2\Loyalty;

class ProgramCardGet
{
    protected $Closed;

    protected $CurrencyId;

    protected $ExpiracyData;

    protected $Id;

    protected $Label;

    protected $Type;

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
    public function getCurrencyId()
    {
        return $this->CurrencyId;
    }

    /**
     * @param mixed $CurrencyId
     */
    public function setCurrencyId($CurrencyId): void
    {
        $this->CurrencyId = $CurrencyId;
    }

    /**
     * @return mixed
     */
    public function getExpiracyData()
    {
        return $this->ExpiracyData;
    }

    /**
     * @param mixed $ExpiracyData
     */
    public function setExpiracyData($ExpiracyData): void
    {
        $this->ExpiracyData = $ExpiracyData;
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
     * @return mixed
     */
    public function getLabel()
    {
        return $this->Label;
    }

    /**
     * @param mixed $Label
     */
    public function setLabel($Label): void
    {
        $this->Label = $Label;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param mixed $Type
     */
    public function setType($Type): void
    {
        $this->Type = $Type;
    }
}