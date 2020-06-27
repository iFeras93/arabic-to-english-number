<?php

namespace Iferas93\ArToEn\Tests;

use Iferas93\ArToEn\Converter;
use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    /** @test */
    public function can_convert_arabic_number_to_english_number()
    {
        $randomArabicNumber = Converter::randomArabicNumber();
        $englishNumber = Converter::fromArabic($randomArabicNumber)->toEnglish();
        echo $randomArabicNumber . ' | ' . $englishNumber;
        $this->assertContains($englishNumber, Converter::ENGLISH_NUMBERS);
    }
}
