<?php

namespace Y2\Loyalty;

class GetAvailableLoyaltyPointsResponse
{

    protected $GetAvailableLoyaltyPointsResult;

    public function __construct($getAvailableLoyaltyPointsResult)
    {
        $this->GetAvailableLoyaltyPointsResult = $getAvailableLoyaltyPointsResult;
    }

    public function getGetAvailableLoyaltyPointsResult()
    {
        return $this->GetAvailableLoyaltyPointsResult;
    }

    public function setGetAvailableLoyaltyPointsResult($getAvailableLoyaltyPointsResult)
    {
        $this->GetAvailableLoyaltyPointsResult = $getAvailableLoyaltyPointsResult;
    }

}