<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use Illuminate\Console\Command;
use Illuminate\Http\Request;

class MultithreadingRequest extends Command
{
    private $totalPageCount;
    private $counter        = 1;
    private $concurrency    = 100;  // 同时并发抓取



    protected $signature = 'zx:start';
    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        //36832
        for ($i=400; $i<1000; $i++){
            $this->url[] = $i;
        }


        $this->totalPageCount = count($this->url);

        $client = new Client();

        $requests = function ($total) use ($client) {
            foreach ($this->url as $key => $item) {
                yield function() use ($client, $item) {
                    $uri = 'http://www.zhongyiju360.com/article/detail-'.$item.'.html';
                    return $client->getAsync($uri);
                };
            }
        };

        $pool = new Pool($client, $requests($this->totalPageCount), [
            'concurrency' => $this->concurrency,
            'fulfilled'   => function ($response, $index){
                $res = $response->getBody()->getContents();
                echo $index.PHP_EOL;

                    $this->info("请求第 $index 个请求");



                $this->countedAndCheckEnded();

            },
            'rejected' => function ($reason, $index){
                $this->error("rejected" );
                $this->error("rejected reason: " . $reason );
                $this->countedAndCheckEnded();
            },
        ]);

        // 开始发送请求
        $promise = $pool->promise();
        $promise->wait();
    }

    public function countedAndCheckEnded()
    {
        if ($this->counter < $this->totalPageCount){
            $this->counter++;
            return;
        }
        $this->info("请求结束！");
    }
}
