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
        \DB::table('accessify_codes')->insert([
            'id' => Str::uuid(),
            'code' => $code,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $code;
    }

    public static function Validate(string $code): bool
    {
        $exists = \DB::table('accessify_codes')->where('code', $code)->exists();
        return $exists;
    }
}