<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckResultCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:checkresult';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check result';

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // TODO: code here
        \Log::info("check result at " . Carbon::now());
        $this->info("check result at " . Carbon::now());
    }
}
