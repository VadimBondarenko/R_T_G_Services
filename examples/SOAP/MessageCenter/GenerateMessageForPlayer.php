<?php

namespace denbora\R_T_G_Services\examples\SOAP\MessageCenter;

use denbora\R_T_G_Services\casino\Casino;

class GenerateMessageForPlayer
{
    /**
     * GenerateMessageForPlayer constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $jackpotService = $casino->getService($service);
            $inputs = array(
                'MessageID' => 1,
                'PID' => 10025652,
                'CasinoID' => 1,
                'Scheme' => '',
                'CashierURL' => '0',
                'TournamentURL' => '',
                'MpRouletteURL' => '',
                'PlayMode' => '',
                'ClientType' => ''
            );

            $result = $jackpotService->call($method, $inputs);

            echo "<pre>";
            var_dump($result);
            echo "</pre>";
        } catch (\Exception $e) {
            echo "<pre>";
            var_dump($e);
            echo "</pre>";
        }
    }
}
