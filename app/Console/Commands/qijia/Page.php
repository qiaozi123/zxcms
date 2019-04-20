<?php

namespace App\Console\Commands\qijia;
use Illuminate\Console\Command;
use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Crawler;

class Page extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'page1:start';

    private $totalPageCount;
    private $counter        = 1;
    private $concurrency    = 10;  // 同时并发抓取

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ehentai 数据处理';

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

        $url = 'https://zixun.jia.com/alist/93/';

        $client = new  Client();
        $html = $client->get($url)->getBody()->getContents();
        $crawler = new Crawler($html);
        $arr = $crawler->filter('#body > div.news_content > div.news_details.clearfix > div.news_main > ul.news_matter > li')->each(function ($node,$i) use ($html) {
            $data['title'] = $node->filter(' li > div.news_matter_detials > h3 > a')->text();
            $data['author'] = '眉山装修网';
            $data['avatar'] = '/asset/images/default.png';
            $data['show'] = '1';
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            $data['show'] = '1';
            $data['see_count'] = rand(100,1000);
            $data['href'] = $node->filter(' li > div.news_matter_detials > h3 > a')->attr('href');
            return $data;
        });

        foreach ($arr as $key=>$item){
            $client = new  Client();
            $html = $client->get($item['href'])->getBody()->getContents();
            $crawler = new Crawler($html);
            $arr[$key]['content'] = $crawler->filter('#body > div.news_content > div.news_details.clearfix > div.news_main > div > div.ind_details')->html();
        }
        $bool = DB::table('articles')->insert($arr);
        if ($bool){
            echo '齐家今日自媒体文章数据抓取完成'.$bool.PHP_EOL;
        }
    }


    public function countedAndCheckEnded()
    {
        if ($this->counter < $this->totalPageCount){
            return;
        }

        $comic =  Comic::where(['series_id'=>4,'comic_img_url'=>null])->get()->toArray();
        if (empty($comic)){
            exit('抓取完毕');
        }else{
            return;
        }

    }
}
