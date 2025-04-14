<?php

namespace Y2\Loyalty;

class UpdatePoints
{
    protected UpdatePointsRequest $updatePointsRequest;

    protected $clientContext = null;

    public function __construct($updatePointsRequest, $clientContext)
    {
        $this->updatePointsRequest = $updatePointsRequest;
        $this->clientContext = $clientContext;
    }

    public function getUpdatePointsRequest(): UpdatePointsRequest
    {
        return $this->updatePointsRequest;
    }

    public function setUpdatePointsRequest(UpdatePointsRequest $updatePointsRequest): void
    {
        $this->updatePointsRequest = $updatePointsRequest;
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