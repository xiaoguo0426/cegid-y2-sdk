<?php

namespace Y2\Loyalty;

class CloseCardResponse
{

    protected $CloseCardResult = null;

    public function __construct($CloseCardResult)
    {
        $this->CloseCardResult = $CloseCardResult;
    }

    public function getUpdateProgramResult()
    {
        return $this->CloseCardResult;
    }

    public function setUpdateProgramResult($UpdateProgramResult)
    {
        $this->CloseCardResult = $UpdateProgramResult;
    }

}