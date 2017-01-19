# levenshtein

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-coveralls]][link-coveralls]
[![Total Downloads][ico-downloads]][link-downloads]

Plain PHP implementation of the Levenshtein distance.
* No 255 characters limit
* Works with UTF-8
* Accepts float as custom costs

## Install

Via Composer

``` bash
$ composer require gordonlesti/levenshtein
```

## Usage

``` php
use \GordonLesti\Levenshtein\Levenshtein;
```

With default default costs.

``` php
$levDist = Levenshtein::levenshtein("AC", "ABAA");
```

With insert cost `7.7`, replace cost `9.4` and delete cost `2.5`.

``` php
$levDist = Levenshtein::levenshtein("ACCB", "BC", 7.7, 9.4, 2.5);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email info@gordonlesti.com instead of using the issue tracker.

## Credits

- [Gordon Lesti][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/gordonlesti/levenshtein.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/GordonLesti/levenshtein/master.svg?style=flat-square
[ico-coveralls]: https://img.shields.io/coveralls/GordonLesti/levenshtein/master.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/gordonlesti/levenshtein.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/gordonlesti/levenshtein
[link-travis]: https://travis-ci.org/GordonLesti/levenshtein
[link-coveralls]: https://coveralls.io/r/GordonLesti/levenshtein?branch=master
[link-downloads]: https://packagist.org/packages/gordonlesti/levenshtein
[link-author]: https://github.com/GordonLesti
[link-contributors]: ../../contributors
