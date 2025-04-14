<?php

namespace Y2\SaleDocument;

class SaleDocumentType
{
    const __default = 'ReturnNotice';
    const ReturnNotice = 'ReturnNotice';
    const CustomerDelivery = 'CustomerDelivery';
    const CustomerOrder = 'CustomerOrder';
    const AvailableOrder = 'AvailableOrder';
    const CustomerReservationRequest = 'CustomerReservationRequest';
    const ReceiptOnHold = 'ReceiptOnHold';
    const Receipt = 'Receipt';
    const DeliveryPreparation = 'DeliveryPreparation';
    const CustomersReservation = 'CustomersReservation';

    /**
     * @return string[]
     */
    public static function getEnumValues(): array
    {
        return [
            self::__default,
            self::ReturnNotice,
            self::CustomerDelivery,
            self::CustomerOrder,
            self::AvailableOrder,
            self::CustomerReservationRequest,
            self::ReceiptOnHold,
            self::Receipt,
            self::DeliveryPreparation,
            self::CustomersReservation,
        ];
    }

    public static function valid($str): bool
    {
        return in_array($str, self::getEnumValues());
    }

}
