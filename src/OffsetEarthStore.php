<?php

namespace OwenVoke\OffsetEarthTile;

use Spatie\Dashboard\Models\Tile;

class OffsetEarthStore
{
    private Tile $tile;

    public static function make(): self
    {
        return new static();
    }

    public function __construct()
    {
        $this->tile = Tile::firstOrCreateForName('offset_earth');
    }

    public function setTrees(int $trees): self
    {
        $this->tile->putData('trees', $trees);

        return $this;
    }

    public function trees(): int
    {
        return $this->tile->getData('trees') ?? 0;
    }

    public function setCarbonOffset(float $carbonOffset): self
    {
        $this->tile->putData('carbonOffset', $carbonOffset);

        return $this;
    }

    public function carbonOffset(): float
    {
        return $this->tile->getData('carbonOffset') ?? 0;
    }
}
