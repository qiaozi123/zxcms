<?php

namespace App\Console\Commands\TooComic;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use App\ComicChapter;
use App\ComicImg;
use App\TempComic;
use App\TempComicDetail;
use App\TempComicImg;
use Illuminate\Support\Facades\DB;
use Spatie\Browsershot\Browsershot;
use Symfony\Component\DomCrawler\Crawler;

class Comic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'toocomic:comic';
    private $totalPageCount;
    private $counter        = 1;
    private $concurrency    = 100;  // 同时并发抓取
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        ini_set('memory_limit', '128M');

        $client = new Client();
        $res = $client->get('https://global.toomics.com/sc/all/webtoon/ranking');
        $http =$res->getBody()->getContents();
        $crawler = new Crawler($http);

        $arr = $crawler->filter('#glo_contents > div > div > div > div.list_wrap > ul.normal > li')->each(function ($node,$i) use ($http) {
            $data['author'] = $node->filter('li > div > a > div.visual > div.main_text > p.writer')->text();
            $data['href'] = 'https://global.toomics.com'.$node->filter('li > div > a')->attr('href');
            $data['name'] = $node->filter('li > div > a > div.visual > div.main_text > h4')->text();
            $data['comic_img_url'] = $node->filter('li > div > a > div.visual > p > img')->attr('data-original');
            $data['description'] = '';
            $data['star_number'] = 5;
            $data['weekupdate'] = '完结';
            $data['click_number'] = rand(100,999);
            $data['buzz'] = rand(10000,99999);
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            $data['userid'] = 4;
            $data['series_id'] = env('SERIES_ID');
            $data['mark'] = env('MARK');
            return $data;
        });
        $bool = DB::table('comic')->insert($arr);
        if ($bool){
            echo 'success'.PHP_EOL;
        }else{
            echo 'fail'.PHP_EOL;
        }
    }

}
