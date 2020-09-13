<?php

namespace OwenVoke\OffsetEarthTile\Services;

use Illuminate\Support\Facades\Http;

class OffsetEarth
{
    public static function getUserImpact(string $username): array
    {
        return Http::get("https://public.ecologi.com/users/{$username}/impact")->json();
    }
}
