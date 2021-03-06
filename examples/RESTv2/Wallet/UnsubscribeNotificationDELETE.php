<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Wallet;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class UnsubscribeNotificationDELETE extends RestExample
{
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'login' => 'tony',
                'clientId' => '0',
            ];

            $result = $casino->WalletService->unsubscribeNotificationDELETE(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
