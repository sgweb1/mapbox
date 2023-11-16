<?php

namespace Sgweb1\Mapbox;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sgweb1\Mapbox\Commands\MapboxCommand;

class MapboxServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('mapbox')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_mapbox_table')
            ->hasCommand(MapboxCommand::class);
    }
}
