<?php

namespace Y2\Loyalty;

class UpdateCardIdResponse
{
    protected $updateCardIdResult = null;

    public function __construct($updateCardIdResult)
    {
        $this->updateCardIdResult = $updateCardIdResult;
    }

    public function getUpdateCardIdResult()
    {
        return $this->updateCardIdResult;
    }

    public function setUpdateCardIdResult($updateCardIdResult)
    {
        $this->updateCardIdResult = $updateCardIdResult;
    }

}