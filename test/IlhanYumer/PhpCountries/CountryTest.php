<?php

namespace IlhanYumer\PhpCountries;

use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase
{
    public function testBulgaria()
    {
        $bulgariaNumericCode = IsoNumericCountryCode::BULGARIA->value;
        self::assertEquals(100, $bulgariaNumericCode);
    }
}
