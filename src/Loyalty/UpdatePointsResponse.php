<?php

namespace Y2\Loyalty;

class UpdatePointsResponse
{

    protected $UpdatePointsResult = null;

    public function __construct($UpdatePointsResult)
    {
        $this->UpdatePointsResult = $UpdatePointsResult;
    }

    public function getUpdatePointsResult()
    {
        return $this->UpdatePointsResult;
    }

    public function setUpdatePointsResult($UpdatePointsResult): void
    {
        $this->UpdatePointsResult = $UpdatePointsResult;
    }

}