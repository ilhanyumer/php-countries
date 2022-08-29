<?php

namespace IlhanYumer\PhpCountries;

use IlhanYumer\PhpCountries\Enums\IsoNumericCountryCode;
use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase
{
    public function testBulgaria()
    {
        $bulgariaNumericCode = IsoNumericCountryCode::BULGARIA->value;
        self::assertEquals(100, $bulgariaNumericCode);
    }
}
