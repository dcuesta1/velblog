<?php

namespace dcuesta1\Velblog\Console;

use Illuminate\Console\Command;

class SeedDummyDataCommand extends Command
{
    protected $signature = 'velblog.seed';

    protected $description = 'Add dummy data for the Velblog package';

    public function handle()
    {
        $this->info('seeding dummy data for Velblog..');

        factory(\dcuesta1\Velblog\Post::class, 5)->create()->each(function ($user) {
            // TODO:: to be continue..
        });

        $this->info('Finito!');
    }
}
