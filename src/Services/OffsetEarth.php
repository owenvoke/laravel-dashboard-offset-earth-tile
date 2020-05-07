<?php

namespace OwenVoke\OffsetEarthTile\Services;

use Illuminate\Support\Facades\Http;

class OffsetEarth
{
    public static function getUserImpact(string $username): array
    {
        return Http::get("https://public.offset.earth/users/{$username}/impact")->json();
    }
}
