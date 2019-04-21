<?php

namespace App\Console\Commands\xiongzhanghao;
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

class push extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xzh:start';
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


        $data =  Article::where([])->limit(10)->orderby('id','desc')->get();
        foreach($data as $item){
            $urls[] = 'http://www.ywxmh.cn/page/'.$item->id.'.html';
        }
        $api = 'http://data.zz.baidu.com/urls?appid=1631290769540899&token=YPQSLUuJcRVX63Gw&type=realtime';
        $ch = curl_init();
        $options =  array(
            CURLOPT_URL => $api,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $urls),
            CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
        );
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        echo $result;
    }

}
