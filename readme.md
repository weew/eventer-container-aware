# Events container integration

[![Build Status](https://img.shields.io/travis/weew/eventer-container-aware.svg)](https://travis-ci.org/weew/eventer-container-aware)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/eventer-container-aware.svg)](https://scrutinizer-ci.com/g/weew/eventer-container-aware)
[![Test Coverage](https://img.shields.io/coveralls/weew/eventer-container-aware.svg)](https://coveralls.io/github/weew/eventer-container-aware)
[![Version](https://img.shields.io/packagist/v/weew/eventer-container-aware.svg)](https://packagist.org/packages/weew/eventer-container-aware)
[![Licence](https://img.shields.io/packagist/l/weew/eventer-container-aware.svg)](https://packagist.org/packages/weew/eventer-container-aware)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Usage](#usage)

## Installation

`composer require weew/eventer-container-aware`

## Introduction

This package integrates [weew/eventer](https://github.com/weew/eventer) with [weew/container](https://github.com/weew/container) and allows subscribers to rely on dependency injection and sharing of data trough the container.

## Usage

Simply create a new instance of the container aware `Eventer` and pass in an instance of `IContainer`.

```php
$kernel = new Weew\Events\ContainerAware\Eventer(new Container());
```
