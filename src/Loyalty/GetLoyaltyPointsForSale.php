<?php

namespace Y2\Loyalty;

use Y2\SaleDocument\SaleDocumentIdentifier;

class GetLoyaltyPointsForSale
{

    protected SaleDocumentIdentifier $SaleDocumentIdentifier;

    protected $clientContext = null;

    public function __construct(SaleDocumentIdentifier $SaleDocumentIdentifier, $clientContext)
    {
        $this->SaleDocumentIdentifier = $SaleDocumentIdentifier;
        $this->clientContext = $clientContext;
    }

    public function getSaleDocumentIdentifier(): SaleDocumentIdentifier
    {
        return $this->SaleDocumentIdentifier;
    }

    public function setSaleDocumentIdentifier(SaleDocumentIdentifier $SaleDocumentIdentifier): void
    {
        $this->SaleDocumentIdentifier = $SaleDocumentIdentifier;
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