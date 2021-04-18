<?php

namespace App\Adapter;

/**
 * Class OldIntegration
 * @package App\Adapter\Component
 *
 * This class is the "Adaptee" of our pattern.
 */
class OldIntegration
{
    const WSDL_URL = 'http://score-application.com.test/people_score.wsdl';

    /**
     * This method is just an example. It doesn't work. It's just to show how it would look like.
     * That is why there are code commented, and the return is always the same.
     *
     * Here should be a lot of code that uses the PHP \SOAP client to call the external API.
     */
    public function getScore($uuid)
    {
        //$soapClient = new \SoapClient(self::WSDL_URL, [
            //'exceptions' => true
        //]);

        //$requestData = ['user_uuid' => $uuid];

        //$response = $soapClient->GetScore($requestData);

        $response = [
            'uuid' => '7de2a62e-7628-4d2f-a02b-fe395c5ce85b',
            'name' => 'Gabriel Anhaia',
            'score' => 65.2
        ];

        return $response;
    }
}