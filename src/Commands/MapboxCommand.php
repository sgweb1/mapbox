<?php

namespace Sgweb1\Mapbox\Commands;

use Illuminate\Console\Command;

class MapboxCommand extends Command
{
    public $signature = 'mapbox';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
