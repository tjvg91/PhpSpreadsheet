<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\MathTrig;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig;
use PHPUnit\Framework\TestCase;

class FloorPreciseTest extends TestCase
{
    public function setUp()
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerFLOORPRECISE
     *
     * @param mixed $expectedResult
     */
    public function testFLOOR($expectedResult, ...$args)
    {
        $result = MathTrig::FLOORPRECISE(...$args);
        $this->assertEquals($expectedResult, $result, '', 1E-12);
    }

    public function providerFLOORPRECISE()
    {
        return require 'data/Calculation/MathTrig/FLOORPRECISE.php';
    }
}
