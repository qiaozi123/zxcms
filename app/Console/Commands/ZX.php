<?php

namespace App\Console\Commands;
use App\Comic;
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

class ZX extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zx:start';
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
        set_time_limit(0);
        ini_set('memory_limit', '1280M');
        $i=1;
        while (true){
            $client = new Client();
            $http = $client->getAsync( 'http://www.zhongyiju360.com/article/detail-'.$i.'.html')->getBody()->getContents();
            $i++;
            $crawler = new Crawler($http);
            $arr['title'] = $crawler->filter('body > div.content.borderb.pdb20 > div.mainwd > div.main-content.lt > div.news-detail.article-detail.borderall > div.news-detail-title.pdlr20 > h1')->html();
            $arr['author'] = '眉山装修网';
            $arr['see_count'] = rand(100,1000);
            $arr['avatar'] = '/asset/images/default.png';
            $arr['show'] = 1;
            $arr['created_at'] = date('Y-m-d H:i:s');
            $arr['updated_at'] = date('Y-m-d H:i:s');
            $arr['content'] = $crawler->filter('body > div.content.borderb.pdb20 > div.mainwd > div.main-content.lt > div.news-detail.article-detail.borderall > div.news-detail-content.mlr20 > div.contentBox')->html();
            print_r($arr);
        }
    }


    public function chapterimg()
    {
        Comic::where('id', '>', '13928')->get();
    }


    public function countedAndCheckEnded()
    {
        if ($this->counter < $this->totalPageCount) {
            return;
        }
    }
}
