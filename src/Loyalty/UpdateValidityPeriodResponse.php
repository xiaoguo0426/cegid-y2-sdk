<?php

namespace Y2\Loyalty;

class UpdateValidityPeriodResponse
{

    protected $UpdateValidityPeriodResult = null;

    public function __construct($UpdateValidityPeriodResult)
    {
        $this->UpdateValidityPeriodResult = $UpdateValidityPeriodResult;
    }

    public function getUpdateValidityPeriodResult()
    {
        return $this->UpdateValidityPeriodResult;
    }

    public function getUpdateValidityPeriodResponse()
    {
        return $this->UpdateValidityPeriodResult;
    }
}