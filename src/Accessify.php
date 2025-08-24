<?php

namespace Daan0101\Accessify;

use Illuminate\Support\Facades\DB;
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
        $method = config('accessify.generation_method', 'random');

        if ($method === 'uuid') {
            $code = (string) Str::uuid();
        } else {
            $code = Str::random(config('accessify.length', 30));
        }

        \DB::table('accessify_codes')->insert([
            'id' => Str::uuid(),
            'code' => $code,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $code;
    }

    public static function Validate(string $code): bool
    {
        $license = DB::table('accessify_codes')
            ->where('code', $code)
            ->where('status', 'active')
            ->first();

        if ($license) {
            DB::table('accessify_codes')
                ->where('id', $license->id)
                ->update([
                    'status' => 'redeemed',
                    'redeemed_at' => now(),
                    'updated_at' => now(),
                ]);
            return true;
        }
        
        return false;
    }
}
