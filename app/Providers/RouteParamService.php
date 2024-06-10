<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
class RouteParamService extends ServiceProvider
{
    // encode parameter route
    public static function encode($value){
        $uniq = Str::random(5);
        $encoded = base64_encode($value . $uniq);
        return $encoded;
    }
    // decode param
    public static function decode($value){
        try {
            $decrypted = base64_decode($value);
            $original = substr($decrypted, 0,-5);
            return $original;
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return null;
        }
    }
}
