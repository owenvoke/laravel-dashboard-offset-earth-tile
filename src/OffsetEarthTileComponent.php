<?php

namespace OwenVoke\OffsetEarthTile;

use Livewire\Component;

class OffsetEarthTileComponent extends Component
{
    /** @var string */
    public $position;

    public function mount(string $position): void
    {
        $this->position = $position;
    }

    public function render()
    {
        $offsetEarthStore = OffsetEarthStore::make();

        return view('dashboard-offset-earth-tile::tile', [
            'trees' => $offsetEarthStore->trees(),
            'carbonOffset' => $offsetEarthStore->carbonOffset(),
            'refreshIntervalInSeconds' => config('dashboard.tiles.offset_earth.refresh_interval_in_seconds', 60),
        ]);
    }
}
