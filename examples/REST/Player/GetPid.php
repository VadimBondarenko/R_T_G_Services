<?php

namespace denbora\R_T_G_Services\examples\REST;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetPid
{
    /**
     * GetPid constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $result = $casino->player->getPlayers('test');

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
