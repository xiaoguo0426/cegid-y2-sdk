<?php

namespace Y2\Loyalty;

class ReOpenCard
{
    protected $ReOpenCardRequest = null;

    protected $clientContext = null;

    public function __construct($reOpenCardRequest, $clientContext)
    {
        $this->ReOpenCardRequest = $reOpenCardRequest;
        $this->clientContext = $clientContext;
    }

    public function getReOpenCardRequest(): null
    {
        return $this->ReOpenCardRequest;
    }

    public function setReOpenCardRequest(null $ReOpenCardRequest): void
    {
        $this->ReOpenCardRequest = $ReOpenCardRequest;
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