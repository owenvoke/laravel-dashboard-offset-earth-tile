<?php

namespace OwenVoke\OffsetEarthTile\Commands;

use Illuminate\Console\Command;
use OwenVoke\OffsetEarthTile\OffsetEarthStore;
use OwenVoke\OffsetEarthTile\Services\OffsetEarth;

class FetchOffsetEarthImpactCommand extends Command
{
    /** {@inheritdoc} */
    protected $signature = 'dashboard:fetch-offset-earth-impact';

    /** {@inheritdoc} */
    protected $description = 'Fetch Offset Earth user impact';

    public function handle(): void
    {
        $this->info('Fetching Offset Earth user impact');

        $statistics = OffsetEarth::getUserImpact(config('dashboard.tiles.offset_earth.username'));

        OffsetEarthStore::make()->setTrees($statistics['trees']);
        OffsetEarthStore::make()->setCarbonOffset($statistics['carbonOffset']);

        $this->info('All done!');
    }
}
