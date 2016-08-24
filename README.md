# indonesian-date-format
Indonesia (ID) date format
##instalation
```
composer require sm-alfariz/indonesian-date-format
```
##how to use
```php
require_once __DIR__ . '/../vendor/autoload.php';
use IndonesiaDate;
echo indonesiaDate(date("Y-m-d")); //echo current date in indonosian format
echo $tgl->blogDate(date("Y-m-d")); //echo blog date style in indonosian format
```