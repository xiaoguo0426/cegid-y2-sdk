<?php

namespace Y2\Loyalty;

class CreateLoyaltyCardResponse
{
    /**
     * @var string $CreateLoyaltyCardResult
     */
    protected $CreateLoyaltyCardResult = null;

    /**
     * @param string $CreateLoyaltyCardResult
     */
    public function __construct($CreateLoyaltyCardResult)
    {
        $this->CreateLoyaltyCardResult = $CreateLoyaltyCardResult;
    }

    /**
     * @param string $CreateLoyaltyCardResult
     *
     * @return CreateLoyaltyCardResponse
     */
    public function setAddNewCustomerResult($CreateLoyaltyCardResult)
    {
        $this->CreateLoyaltyCardResult = $CreateLoyaltyCardResult;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateLoyaltyCardResult()
    {
        return $this->CreateLoyaltyCardResult;
    }

}
