<?php

namespace Kamaro\Mtn\Commands;

use Illuminate\Console\Command;

class MtnCommand extends Command
{
    public $signature = 'mtn';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
