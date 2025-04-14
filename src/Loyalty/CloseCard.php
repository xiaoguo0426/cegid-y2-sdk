<?php

namespace Y2\Loyalty;

class CloseCard
{
    protected $CloseCardRequest = null;

    protected $clientContext = null;

    public function __construct($CloseCardRequest, $clientContext)
    {
        $this->CloseCardRequest = $CloseCardRequest;
        $this->clientContext = $clientContext;
    }

    public function getCloseCardRequest(): null
    {
        return $this->CloseCardRequest;
    }

    public function setCloseCardRequest(null $CloseCardRequest): void
    {
        $this->CloseCardRequest = $CloseCardRequest;
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