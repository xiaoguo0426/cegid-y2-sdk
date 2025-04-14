<?php

namespace Y2\Loyalty;

class UpdateCardId
{
    protected UpdateCardIdRequest $UpdateCardIdRequest;

    protected $clientContext = null;

    public function __construct(UpdateCardIdRequest $UpdateCardIdRequest, $clientContext)
    {
        $this->UpdateCardIdRequest = $UpdateCardIdRequest;
        $this->clientContext = $clientContext;
    }

    public function getUpdateCardIdRequest(): UpdateCardIdRequest
    {
        return $this->UpdateCardIdRequest;
    }

    public function setUpdateCardIdRequest(UpdateCardIdRequest $UpdateCardIdRequest): void
    {
        $this->UpdateCardIdRequest = $UpdateCardIdRequest;
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