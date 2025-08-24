# Accessify

A simple and lightweight Laravel package to manage software license codes.

## Installation

Install via Composer:

```bash
composer require daan0101/accessify:^1.0
```

## Setup

Install the package:

```bash
php artisan accessify:install
```

## Usage

Generate a license

```bash
use Daan0101\Accessify\Accessify;

Accessify::Generate()
```

Validate a license

```bash
use Daan0101\Accessify\Accessify;

$code = 'a-random-code';
Accessify::Validate($code);
```