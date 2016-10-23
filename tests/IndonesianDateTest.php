<?php

namespace Test;

use Fendi\IndonesianDate\IndonesiaDate;
use PHPUnit_Framework_TestCase;

class IndonesianDateTest extends \PHPUnit_Framework_TestCase
{

    public function testDateVar()
    {
        $dt = new IndonesiaDate;

        if (count($dt)) {
            $test = true;
        } else {
            $test = false;
        }
        $this->assertTrue($test);
        if ($test) {
            echo $dt->indonesiaDate(date('Y-m-d H:m:s'));
        }
    }
}