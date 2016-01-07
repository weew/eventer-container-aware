# Events container integration

[![Build Status](https://img.shields.io/travis/weew/php-eventer-container-aware.svg)](https://travis-ci.org/weew/php-eventer-container-aware)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/php-eventer-container-aware.svg)](https://scrutinizer-ci.com/g/weew/php-eventer-container-aware)
[![Test Coverage](https://img.shields.io/coveralls/weew/php-eventer-container-aware.svg)](https://coveralls.io/github/weew/php-eventer-container-aware)
[![Dependencies](https://img.shields.io/versioneye/d/php/weew:php-eventer-container-aware.svg)](https://versioneye.com/php/weew:php-eventer-container-aware)
[![Version](https://img.shields.io/packagist/v/weew/php-eventer-container-aware.svg)](https://packagist.org/packages/weew/php-eventer-container-aware)
[![Licence](https://img.shields.io/packagist/l/weew/php-eventer-container-aware.svg)](https://packagist.org/packages/weew/php-eventer-container-aware)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Usage](#usage)

## Installation

`composer require weew/php-eventer-container-aware`

## Introduction

This package integrates [weew/php-eventer](https://github.com/weew/php-eventer) with [weew/php-container](https://github.com/weew/php-container) and allows subscribers to rely on dependency injection and sharing of data trough the container.

## Usage

Simply create a container aware instance of `Eventer` and pass in an instance of `IContainer`.

```php
$kernel = new Weew\Events\ContainerAware\Eventer(new Container());
```
