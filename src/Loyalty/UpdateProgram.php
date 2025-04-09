<?php

namespace Y2\Loyalty;

class UpdateProgram
{
    protected $UpdateProgramRequest = null;

    protected $clientContext = null;

    public function __construct($UpdateProgramRequest, $clientContext)
    {
        $this->UpdateProgramRequest = $UpdateProgramRequest;
        $this->clientContext = $clientContext;
    }

    public function getUpdateProgramRequest()
    {
        return $this->UpdateProgramRequest;
    }

    public function setUpdateProgramRequest($UpdateProgramRequest)
    {
        $this->UpdateProgramRequest = $UpdateProgramRequest;
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