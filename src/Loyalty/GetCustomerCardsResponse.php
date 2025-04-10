<?php

namespace Y2\Loyalty;

class GetCustomerCardsResponse
{
    /**
     * @var ArrayOfCardHeaderGet $GetCustomerCardsResult
     */
    protected $GetCustomerCardsResult = null;

    public function __construct($GetCustomerCardsResult)
    {
        $this->GetCustomerCardsResult = $GetCustomerCardsResult;
    }

    /**
     * @return ArrayOfCardHeaderGet
     */
    public function getGetCustomerCardsResult()
    {
        return $this->GetCustomerCardsResult;
    }

    /**
     * @param ArrayOfCardHeaderGet $GetCustomerCardsResult
     * @return $this
     */
    public function setGetCustomerCardsResult($GetCustomerCardsResult)
    {
        $this->GetCustomerCardsResult = $GetCustomerCardsResult;
        return $this;
    }

}