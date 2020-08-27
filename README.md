# MixPanel logging using Repository Design Pattern with Laravel/Lumen

[GitHub Pages](https://pages.github.com/)

If you are using Laravel Or Lumen follow the same directory structure.

Add Mixpanel library in composer.json in "require" array

```json
"mixpanel/mixpanel-php" : "2.*"
```
Run Command in Terminal

```linux
composer install
```

Constants are useful for defining values that are used many times within a function or program

using constants, programmers can modify multiple instances of a value at one time. 

***Create Constant file***

**file path :** app/Constants/Constant.php

```php
class Constant
{


    /* MixPanel */
    const MIXPANEL= "MIXPANEL";
    const MIXPANELPROJECTKEY = "PROJECT_KEY";
    
    /*To keep the event names clean,To keep the event names clean,
      how important the naming convention plays into your analysis.*/
      
    const MIXPANELDELETEUSEREVENTLOG = "DeleteUserLog";
}
```

***Start Respository structure with Interface***

create general interface for tracking logs

**file path:** app/Domain/Repositories/Logs/Contracts/InterfaceLogRepository.php

```php
namespace App\Domain\Repositories\Logs\Contracts;


interface InterfaceLogRepository
{
    /**
     * @param $sEvent
     * @param $aPayload
     */
    public function addEvent($sEvent,$aPayload);
}
```
***Implement interface in Mixpanel Repository Class***

**file path :** app/Domain/Repositories/Logs/MixPanelRepository.php

```php
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
```
