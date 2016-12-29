<?php

namespace App\Console\Commands;

use App\Http\Controllers\ReceiveResultController;
use App\Http\Controllers\SubscribeResultController;
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
        $job = new ReceiveResultController();
        // check course UET and send mail
        \Log::info('');
        \Log::info("======== Start command ===========" . Carbon::now());
        $job->reCheck(); // check uet site
        $job->checkSubcribe(); // sent mail
        \Log::info("======== End command ===========" . Carbon::now());
    }
}
