<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Account;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class BanPlayerPOST extends RestExample
{
    /**
     * BanPlayerPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'ban_type' => 'email',
                'comment' => 'Ban me',
                'player_id' => '10314061', //this is tony_0003
                'deductAffiliateEarnings' => 'false'
            ];

            $result = $casino->AccountService->banPlayerPOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
