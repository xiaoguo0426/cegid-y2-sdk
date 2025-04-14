<?php

namespace Y2\Loyalty;

class ReOpenCardResponse
{

    protected $ReOpenCardResult = null;

    public function __construct($ReOpenCardResult)
    {
        $this->ReOpenCardResult = $ReOpenCardResult;
    }

    public function getReOpenCardResult(): null
    {
        return $this->ReOpenCardResult;
    }

    public function setReOpenCardResult(null $ReOpenCardResult): void
    {
        $this->ReOpenCardResult = $ReOpenCardResult;
    }

}