<?php

namespace App\Domain\Repositories\Logs\Contracts;


interface InterfaceLogRepository
{
    /**
     * @param $sEvent
     * @param $aPayload
     */
    public function addEvent($sEvent,$aPayload);
}
