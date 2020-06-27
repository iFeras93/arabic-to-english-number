<?php

namespace Iferas93\ArToEn;

class Converter
{
    const ARABIC_NUMBERS = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
    const ENGLISH_NUMBERS = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9',];

    private $arabicNumber;


    public function __construct($arabicNumber)
    {
        $this->arabicNumber = $arabicNumber;
    }


    public static function fromArabic($arabicNumber)
    {
        return new static($arabicNumber);
    }

    public function toEnglish()
    {
        return str_replace(self::ARABIC_NUMBERS, self::ENGLISH_NUMBERS, $this->arabicNumber);
    }

    public static function randomArabicNumber()
    {
        return self::ARABIC_NUMBERS[rand(0, 9)];
    }
}
