# Events container integration

[![Build Status](https://travis-ci.org/weew/php-events-container-aware.svg?branch=master)](https://travis-ci.org/weew/php-events-container-aware)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/weew/php-events-container-aware/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/weew/php-events-container-aware/?branch=master)
[![Coverage Status](https://coveralls.io/repos/weew/php-events-container-aware/badge.svg?branch=master&service=github)](https://coveralls.io/github/weew/php-events-container-aware?branch=master)
[![License](https://poser.pugx.org/weew/php-events-container-aware/license)](https://packagist.org/packages/weew/php-events-container-aware)

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
