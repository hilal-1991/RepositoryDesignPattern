<?php


namespace App\Domain\Repositories\Logs\Contracts;


interface iLogRepository
{
    /**
     * @param $sEvent
     * @param $aPayload
     */
    public function addEvent($sEvent,$aPayload);
}