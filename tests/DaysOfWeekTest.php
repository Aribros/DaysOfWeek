<?php
require("vendor/autoload.php");

use PHPUnit\Framework\TestCase;


class DaysOfWeekTest extends TestCase
{
    /**
     * Test When T = "Wed" and Z = 2
     * Supposed to return Friday
     */
    public function test_One_T_Wed_Z_2()
    {
        $this->assertEquals("Fri", DaysOfWeek("Wed",2));

    }

    /**
     * Test When T = "Sat" and Z = 23
     * Supposed to return Monday
     */    
    public function test_Two_T_Sat_Z_23()
    {
        $this->assertEquals("Mon", DaysOfWeek("Sat",23));

    }
}