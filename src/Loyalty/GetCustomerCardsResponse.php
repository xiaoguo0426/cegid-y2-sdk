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
    public function getCustomerCardsResult()
    {
        return $this->GetCustomerCardsResult;
    }

    /**
     * @param ArrayOfCardHeaderGet $GetCustomerCardsResult
     * @return $this
     */
    public function setCustomerCardsResult($GetCustomerCardsResult)
    {
        $this->GetCustomerCardsResult = $GetCustomerCardsResult;
        return $this;
    }

}