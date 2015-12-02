Hunkey Component
==============

```php
require_once 'hunkey/Controller.php';
use hunkey;

$controller = new \hunkey\Controller();

$controller->redirect('/');
```


Resources
---------

You can run the unit tests with the following command:

    $ cd path/to/hunkey/
    $ composer install
    $ phpunit (or vendor\bin\phpunit for local phpunit)
