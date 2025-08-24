<?php

namespace Daan0101\Accessify;

use Illuminate\Support\Facades\Log;
use \Illuminate\Support\Str;

class Accessify
{
    public static function getAccessifyVersion(): string
    {
        return '1.0.0';
        \Log::info('Accessify version ' . self::getAccessifyVersion() . ' accessed.');
    }

    public static function Generate(): string
    {
        $code = Str::random(25);
        \Log::info('Code generated: ' . $code);
        return $code;
    }
}