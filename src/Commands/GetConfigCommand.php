<?php

namespace OhSeeSoftware\LaravelGetConfig\Commands;

use Illuminate\Console\Command;

class GetConfigCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'config:get {key : The key of the config value to retrieve}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Returns the value of the given configuration key';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info(json_encode(config($this->argument('key')), JSON_PRETTY_PRINT));
    }
}
