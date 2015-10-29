# Events container integration

[![Build Status](https://travis-ci.org/weew/php-events-container-aware.svg?branch=master)](https://travis-ci.org/weew/php-events-container-aware)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/weew/php-events-container-aware/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/weew/php-events-container-aware/?branch=master)
[![Coverage Status](https://coveralls.io/repos/weew/php-events-container-aware/badge.svg?branch=master&service=github)](https://coveralls.io/github/weew/php-events-container-aware?branch=master)
[![License](https://poser.pugx.org/weew/php-events-container-aware/license)](https://packagist.org/packages/weew/php-events-container-aware)

## Table of contents

- [Introduction](#introduction)
- [Usage](#usage)

## Introduction

This package integrates [weew/php-events](https://github.com/weew/php-events) with [weew/php-container](https://github.com/weew/php-container) and allows subscribers to rely on dependency injection and sharing of data trough the container.

## Usage

Simply create an instance of `ContainerAwareEventDispatcher` instead of the `EventDispatcher` and pass in an instance of `IContainer`.

```php
$kernel = new ContainerAwareEventDispatcher(new Container());
```
