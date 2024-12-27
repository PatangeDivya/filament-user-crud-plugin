<?php

namespace PatangeDivya\FilamentUserCrudPlugin\Commands;

use Illuminate\Console\Command;

class FilamentUserCrudPluginCommand extends Command
{
    public $signature = 'filament-user-crud-plugin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
