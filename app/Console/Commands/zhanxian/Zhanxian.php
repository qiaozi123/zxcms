<?php

namespace App\Console\Commands\zhanxian;

use Illuminate\Console\Command;
use Spatie\Browsershot\Browsershot;

class Zhanxian extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zhanxian:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '展现量';

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
     * @return mixed
     */
    public function handle()
    {
      $a =  Browsershot::url('https://www.baidu.com')->bodyHtml();
      dd($a);
    }


}
