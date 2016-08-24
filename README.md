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
$time = strtotime('2016-08-22 21:25:43');
echo $tgl->humanDifSimple($time);  //result " 4 hari "
echo $tgl->humanDif($time);  //result " 3 hari 3 jam 54 menit yang lalu "
```