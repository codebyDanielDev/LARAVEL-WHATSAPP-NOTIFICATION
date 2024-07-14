<?php

namespace Danielowoow\LARAVELWHATSAPPNOTIFICATION\Commands;

use Illuminate\Console\Command;

class LARAVELWHATSAPPNOTIFICATIONCommand extends Command
{
    public $signature = 'laravel-whatsapp-notification';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
