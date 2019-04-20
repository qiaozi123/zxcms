<?php

namespace App\Console\Commands;
use App\Comic;
use App\Model\Article;
use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use Illuminate\Console\Command;
use App\ComicChapter;
use App\ComicImg;
use App\TempComic;
use App\TempComicDetail;
use App\TempComicImg;
use Illuminate\Support\Facades\DB;
use Spatie\Browsershot\Browsershot;
use Symfony\Component\DomCrawler\Crawler;

class Post extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'baidu:start';
    private $totalPageCount;
    private $counter = 1;
    private $concurrency = 10;  // 同时并发抓取


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ehentai 标题抓取';

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
        ini_set('memory_limit','50M');


        $data =  Article::all();
        foreach($data as $item){
            $urls[] = 'http://www.pvcpai.com/page/'.$item->id.'.html';
        }
            $chunk_result = array_chunk($urls, 2000, true);

        foreach ($chunk_result as $item){
            $api = 'http://data.zz.baidu.com/urls?site=www.ywxmh.cn&token=Zd1CyjaURA2i57HJ';
            $ch = curl_init();
            $options =  array(
                CURLOPT_URL => $api,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => implode("\n", $item),
                CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
            );
            curl_setopt_array($ch, $options);
            $result = curl_exec($ch);
            echo $result.PHP_EOL;
        }

    }

}
