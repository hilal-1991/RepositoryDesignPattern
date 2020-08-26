# RepositoryDesignPattern

MixPanel logging using Repository Design Pattern with Laravel/Lumen

If you are using Laravel Or Lumen follow the same directory structure.

Add Mixpanel library in composer.json in "require" array

```json
"mixpanel/mixpanel-php" : "2.*"
```
Run Command in Terminal

```linux
composer install
```

Create Constant file

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



