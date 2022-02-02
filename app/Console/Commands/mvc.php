<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class mvc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ishani:bhrati {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Modal,Migration,Controller';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call("make:controller".' '.$this->argument('count'));
        Artisan::call("make:model".' '.$this->argument('count').' -m');

        $this->info("create mvc success");
    }
}
