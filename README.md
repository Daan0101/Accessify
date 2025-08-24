# Accessify

A simple and lightweight Laravel package that helps you control who can access your application.

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

if (!Accessify::Validate($code)) {
    throw \Illuminate\Validation\ValidationException::withMessages([
        'code' => 'The provided access code is invalid.',
    ]);
}

```