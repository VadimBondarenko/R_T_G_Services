<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Account;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPlayerIdGET extends RestExample
{
    /**
     * GetPlayerIdGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'login' => 'tony_0003',
            ];

            $result = $casino->AccountService->getPlayerIdGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
