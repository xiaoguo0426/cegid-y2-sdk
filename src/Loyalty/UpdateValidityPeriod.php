<?php

namespace Y2\Loyalty;

class UpdateValidityPeriod
{
    protected UpdateValidityPeriodRequest $UpdateValidityPeriodRequest;

    protected $clientContext = null;

    public function __construct(UpdateValidityPeriodRequest $updateValidityPeriodRequest, $clientContext)
    {
        $this->UpdateValidityPeriodRequest = $updateValidityPeriodRequest;
        $this->clientContext = $clientContext;
    }

    public function getUpdateValidityPeriodRequest(): UpdateValidityPeriodRequest
    {
        return $this->UpdateValidityPeriodRequest;
    }

    public function setUpdateValidityPeriodRequest(UpdateValidityPeriodRequest $updateValidityPeriodRequest)
    {
        $this->UpdateValidityPeriodRequest = $updateValidityPeriodRequest;
    }

    public function getClientContext()
    {
        return $this->clientContext;
    }

    public function setClientContext($clientContext)
    {
        $this->clientContext = $clientContext;
    }


}