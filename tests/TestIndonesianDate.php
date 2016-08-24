<?php

/**
 * Created by PhpStorm.
 * User: fendi
 * Date: 25/08/16
 * Time: 1:56
 */
namespace Test;

use Fendi\IndonesianDate\IndonesiaDate;
use PHPUnit_Framework_TestCase;

class TestIndonesianDate extends \PHPUnit_Framework_TestCase
{

    public function testTrueIsTrue()
    {
        $dt = new IndonesiaDate;
        if (count($dt)) {
            $test = true;
        } else {
            $test = false;
        }
        $this->assertTrue($test);
    }
}