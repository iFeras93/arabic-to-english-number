# Arabic to English number

[![Latest Version on Packagist](https://img.shields.io/packagist/v/iferas93/arabic-to-english-number.svg?style=flat-square)](https://packagist.org/packages/iferas93/arabic-to-english-number)
![Tests](https://github.com/iferas93/arabic-to-english-number/workflows/Tests/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/iferas93/arabic-to-english-number.svg?style=flat-square)](https://packagist.org/packages/iferas93/arabic-to-english-number)


Convert Arabic to English number.

## Installation

You can install the package via composer:

```bash
composer require iferas93/arabic-to-english-number
```

## Usage

``` php
use use Iferas93\ArToEn\Converter;
echo Converter::fromArabic('١')->toEnglish(); // output= 1
```

or

``` php
echo \Iferas93\ArToEn\Converter::fromArabic('١')->toEnglish(); // output= 1
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email ferasmo7mad@gmail.com instead of using the issue tracker.

## Credits

- [Feras Mohamed](https://github.com/iFeras93)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
