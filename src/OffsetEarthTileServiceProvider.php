<?php

namespace OwenVoke\OffsetEarthTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use OwenVoke\OffsetEarthTile\Commands\FetchOffsetEarthImpactCommand;

class OffsetEarthTileServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Livewire::component('offset-earth-tile', OffsetEarthTileComponent::class);

        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchOffsetEarthImpactCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/dashboard-offset-earth-tile'),
        ], 'dashboard-offset-earth-tile-views');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'dashboard-offset-earth-tile');
    }
}
