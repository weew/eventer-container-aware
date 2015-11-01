# Events container integration

[![Build Status](https://img.shields.io/travis/weew/php-events-container-aware.svg)](https://travis-ci.org/weew/php-events-container-aware)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/php-events-container-aware.svg)](https://scrutinizer-ci.com/g/weew/php-events-container-aware)
[![Test Coverage](https://img.shields.io/coveralls/weew/php-events-container-aware.svg)](https://coveralls.io/github/weew/php-events-container-aware)
[![Dependencies](https://img.shields.io/versioneye/d/php/weew:php-events-container-aware.svg)](https://versioneye.com/php/weew:php-events-container-aware)
[![Version](https://img.shields.io/packagist/v/weew/php-events-container-aware.svg)](https://packagist.org/packages/weew/php-events-container-aware)
[![Licence](https://img.shields.io/packagist/l/weew/php-events-container-aware.svg)](https://packagist.org/packages/weew/php-events-container-aware)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Usage](#usage)

## Installation

`composer require weew/php-events-container-aware`

## Introduction

This package integrates [weew/php-events](https://github.com/weew/php-events) with [weew/php-container](https://github.com/weew/php-container) and allows subscribers to rely on dependency injection and sharing of data trough the container.

## Usage

Simply create a container aware instance of `EventDispatcher` and pass in an instance of `IContainer`.

```php
$kernel = new Weew\Events\ContainerAware\EventDispatcher(new Container());
```
