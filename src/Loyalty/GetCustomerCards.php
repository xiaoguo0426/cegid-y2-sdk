<?php

namespace Y2\Loyalty;

class GetCustomerCards
{
    protected $customerCardsRequest = null;

    protected $clientContext = null;

    /**
     * @param CustomerCardsRequest $customerCardsRequest
     * @param $clientContext
     */
    public function __construct(CustomerCardsRequest $customerCardsRequest, $clientContext)
    {
        $this->customerCardsRequest = $customerCardsRequest;
        $this->clientContext = $clientContext;
    }

    public function getCustomerCardsRequest(): ?CustomerCardsRequest
    {
        return $this->customerCardsRequest;
    }

    public function setCustomerCardsRequest(?CustomerCardsRequest $customerCardsRequest): void
    {
        $this->customerCardsRequest = $customerCardsRequest;
    }

    public function getClientContext(): null
    {
        return $this->clientContext;
    }

    public function setClientContext(null $clientContext): void
    {
        $this->clientContext = $clientContext;
    }

}