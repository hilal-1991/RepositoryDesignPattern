<?php

namespace App\Domain\Repositories\Logs;

use App\Constants\Constant;
use App\Domain\Repositories\Logs\Contracts\InterfaceLogRepository;

class MixPanelRepository implements InterfaceLogRepository
{
    private $oMixPanel;

    public function __construct()
    {
        $this->oMixPanel = \Mixpanel::getInstance(Constant::MIXPANELPROJECTKEY);
    }

    /**
     * @param $sEvent
     * @param $aPayload
     */
    public function addEvent($sEvent, $aPayload)
    {
        $this->oMixPanel->track($sEvent,$aPayload);
    }
}
