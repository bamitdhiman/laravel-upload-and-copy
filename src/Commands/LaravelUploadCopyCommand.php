<?php

namespace Bamit\LaravelUploadCopy\Commands;

use Illuminate\Console\Command;

class LaravelUploadCopyCommand extends Command
{
    public $signature = 'laravel-upload-and-copy';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
