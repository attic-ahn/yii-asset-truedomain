# truedomain.biz assets

**truedomain.biz asset files: images, configs and more**

[![Latest Stable Version](https://poser.pugx.org/ahnames/yii-asset-truedomain/v/stable)](https://packagist.org/packages/ahnames/yii-asset-truedomain)
[![Total Downloads](https://poser.pugx.org/ahnames/yii-asset-truedomain/downloads)](https://packagist.org/packages/ahnames/yii-asset-truedomain)
[![Build Status](https://img.shields.io/travis/ahnames/yii-asset-truedomain.svg)](https://travis-ci.org/ahnames/yii-asset-truedomain)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/ahnames/yii-asset-truedomain.svg)](https://scrutinizer-ci.com/g/ahnames/yii-asset-truedomain/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/ahnames/yii-asset-truedomain.svg)](https://scrutinizer-ci.com/g/ahnames/yii-asset-truedomain/)

[truedomain.biz](https://truedomain.biz) is a domain registrator.

This package provides assets shareable between different truedomain projects:

- logos and css bundled with Yii asset bundle
- config settings
- translations

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "ahnames/yii-asset-truedomain"
```

or add

```json
"ahnames/yii-asset-truedomain": "*"
```

to the require section of your composer.json.

## Replaces

E.g. we want MyNames

    organization:   AHnames             -> TrueDomain           -> MyNames
    class name:     AhnamesAsset        -> TrueDomainAsset      -> MyNamesAsset
    domain name:    ahnames.com         -> truedomain.biz       -> mynames.com
    namespace:      ahnames             -> truedomain           -> mynames
    package name:   yii2-asset-ahnames  -> yii-asset-truedomain -> yii-asset-mynames

## License

This project is released under the terms of the proprietary [license](LICENSE).
Read more [here](https://en.wikipedia.org/wiki/Proprietary_software).

Copyright © 2017-2018, AHnames (https://ahnames.com/)
