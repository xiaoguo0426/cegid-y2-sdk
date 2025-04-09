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
        var_dump($this->__soapCall('UpdateProgram', array($updateProgram)));die();
        return $this->__soapCall('UpdateProgram', array($updateProgram));
    }
}