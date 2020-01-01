## SignpostMarv\Brick Math Base Convert

A fork of [brick/math](https://github.com/brick/math), extracting & refactoring the base conversion portion.

[![Build Status](https://api.travis-ci.org/signpostmarv/brick-math-base-convert-gmp.svg?branch=master)](http://travis-ci.org/signpostmarv/brick-math-base-convert-gmp)
[![Coverage Status](https://coveralls.io/repos/signpostmarv/brick-math-base-convert-gmp/badge.svg?branch=master)](https://coveralls.io/r/signpostmarv/brick-math-base-convert-gmp?branch=master)
[![Total Downloads](https://poser.pugx.org/signpostmarv/brick-math-base-convert-gmp/downloads)](https://packagist.org/packages/signpostmarv/brick-math-base-convert-gmp)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](http://opensource.org/licenses/MIT)

### Installation

This library is installable via [Composer](https://getcomposer.org/):

```bash
composer require signpostmarv/brick-math-base-convert-gmp
```

### Requirements

This library requires PHP 7.4 or later, and for the gmp extension to be installed.

For other options, see:
* [native](https://github.com/signpostmarv/brick-math-base-convert)
* [ext-bcmath](https://github.com/signpostmarv/brick-math-base-convert-bcmath)

For older versions of PHP, please use the [original package](https://github.com/brick/math).

### Project status & release process

While this library is still under development, it is well tested and should be stable enough to use in production
environments.

The current releases are numbered `0.x.y`. When a non-breaking change is introduced (adding new methods, optimizing
existing code, etc.), `y` is incremented.

**When a breaking change is introduced, a new `0.x` version cycle is always started.**

It is therefore safe to lock your project to a given release cycle, such as `0.8.*`.

If you need to upgrade to a newer release cycle, check the [release history](https://github.com/signpostmarv/brick-math-base-convert-gmp/releases)
for a list of changes introduced by each further `0.x.0` version.
