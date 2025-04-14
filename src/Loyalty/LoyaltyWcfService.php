<?php

namespace Y2\Loyalty;

class LoyaltyWcfService extends \SoapClient
{

    private static array $classmap = [
        'HelloWorld' => 'Y2\\Loyalty\\HelloWorld',
        'RetailContext' => 'Y2\\Loyalty\\RetailContext',
        'HelloWorldResponse' => 'Y2\\Loyalty\\HelloWorldResponse',
        'CreateLoyaltyCardResponse' => 'Y2\\Loyalty\\CreateLoyaltyCardResponse',
        'GetCustomerCardsResponse' => 'Y2\\Loyalty\\GetCustomerCardsResponse',
        'ArrayOfCardHeaderGet' => 'Y2\\Loyalty\\ArrayOfCardHeaderGet',
        'CardHeaderGet' => 'Y2\\Loyalty\\CardHeaderGet',
        'ProgramCardGet' => 'Y2\Loyalty\ProgramCardGet',
        'UpdateCustomerCardsResponse' => 'Y2\\Loyalty\\UpdateCustomerCardsResponse',
        'UpdateProgramResponse' => 'Y2\\Loyalty\\UpdateProgramResponse',
        'CloseCardResponse' => 'Y2\\Loyalty\\CloseCardResponse',
        'ReOpenCardResponse' => 'Y2\\Loyalty\\ReOpenCardResponse',
        'UpdateCardIdResponse' => 'Y2\\Loyalty\\UpdateCardIdResponse',
        'GetAvailableLoyaltyPointsResponse' => 'Y2\\Loyalty\\GetAvailableLoyaltyPointsResponse',
        'GetCustomerAvailableLoyaltyPointsResponse' => 'Y2\\Loyalty\\GetCustomerAvailableLoyaltyPointsResponse',
        'UpdateValidityPeriodResponse' => 'Y2\\Loyalty\\UpdateValidityPeriodResponse',
    ];

    /**
     * @param $wsdl
     * @param array $options
     * @throws \SoapFault
     */
    public function __construct($wsdl, array $options = array())
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $options = array_merge(array(
            'features' => 1,
        ), $options);

        parent::__construct($wsdl, $options);
    }


    /**
     * @param HelloWorld $parameters
     * @return mixed
     * @throws \SoapFault
     */
    public function HelloWorld(HelloWorld $parameters): mixed
    {
        return $this->__soapCall('HelloWorld', array($parameters));
    }

    /**
     * @param CreateLoyaltyCard $parameters
     * @return CreateLoyaltyCardResponse
     * @throws \SoapFault
     */
    public function CreateLoyaltyCard(CreateLoyaltyCard $parameters): CreateLoyaltyCardResponse
    {
        return $this->__soapCall('CreateLoyaltyCard', array($parameters));
    }

    /**
     * @param GetCustomerCards $parameters
     * @return GetCustomerCardsResponse
     * @throws \SoapFault
     */
    public function GetCustomerCards(GetCustomerCards $parameters): GetCustomerCardsResponse
    {
        return $this->__soapCall('GetCustomerCards', array($parameters));
    }

    /**
     * @param UpdateProgram $updateProgram
     * @return UpdateProgramResponse
     * @throws \SoapFault
     */
    public function UpdateProgram(UpdateProgram $updateProgram): UpdateProgramResponse
    {
        return $this->__soapCall('UpdateProgram', array($updateProgram));
    }

    /**
     * @param CloseCard $closeCard
     * @return string
     * @throws \SoapFault
     */
    public function CloseCard(CloseCard $closeCard): string
    {
        return $this->__soapCall('CloseCard', array($closeCard));
    }

    /**
     * @param ReOpenCard $reOpenCard
     * @return string
     * @throws \SoapFault
     */
    public function ReOpenCard(ReOpenCard $reOpenCard): string
    {
        return $this->__soapCall('ReOpenCard', array($reOpenCard));
    }

    /**
     * @param UpdatePoints $updatePoints
     * @return string
     * @throws \SoapFault
     */
    public function UpdatePoints(UpdatePoints $updatePoints): string
    {
        return $this->__soapCall('UpdatePoints', array($updatePoints));
    }

    /**
     * @param GetLoyaltyPointsForSale $getLoyaltyPointsForSale
     * @return mixed
     * @throws \SoapFault
     */
    public function GetLoyaltyPointsForSale(GetLoyaltyPointsForSale $getLoyaltyPointsForSale)
    {
        return $this->__soapCall('GetLoyaltyPointsForSale', array($getLoyaltyPointsForSale));
    }

    /**
     * @param UpdateCardId $updateCardId
     * @return mixed
     * @throws \SoapFault
     */
    public function UpdateCardId(UpdateCardId $updateCardId)
    {
        return $this->__soapCall('UpdateCardId', array($updateCardId));
    }

    /**
     * @param GetAvailableLoyaltyPoints $getAvailableLoyaltyPoints
     * @return mixed
     * @throws \SoapFault
     */
    public function GetAvailableLoyaltyPoints(GetAvailableLoyaltyPoints $getAvailableLoyaltyPoints)
    {
        return $this->__soapCall('GetAvailableLoyaltyPoints', array($getAvailableLoyaltyPoints));
    }

    public function GetCustomerAvailableLoyaltyPoints(GetCustomerAvailableLoyaltyPoints $getCustomerAvailableLoyaltyPoints)
    {
        return $this->__soapCall('GetCustomerAvailableLoyaltyPoints', array($getCustomerAvailableLoyaltyPoints));
    }

    public function UpdateValidityPeriod(UpdateValidityPeriod $updateValidityPeriod)
    {
        return $this->__soapCall('UpdateValidityPeriod', array($updateValidityPeriod));
    }
}