<?php

namespace Y2\Loyalty;

class GetCustomerAvailableLoyaltyPointsResponse
{

    protected $GetCustomerAvailableLoyaltyPointsResult;

    public function __construct($GetCustomerAvailableLoyaltyPointsResult)
    {
        $this->GetCustomerAvailableLoyaltyPointsResult = $GetCustomerAvailableLoyaltyPointsResult;
    }

    public function getGetCustomerAvailableLoyaltyPointsResult()
    {
        return $this->GetCustomerAvailableLoyaltyPointsResult;
    }

    public function setGetCustomerAvailableLoyaltyPointsResult($GetCustomerAvailableLoyaltyPointsResult)
    {
        $this->GetCustomerAvailableLoyaltyPointsResult = $GetCustomerAvailableLoyaltyPointsResult;
    }

}