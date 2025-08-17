<?php

namespace Daan0101\Accessify;

use Illuminate\Support\Facades\Log;

class Accessify
{
    public static function getAccessifyVersion(): string
    {
        return '1.0.0';
        \Log::info('Accessify version ' . self::getAccessifyVersion() . ' accessed.');
    }
}