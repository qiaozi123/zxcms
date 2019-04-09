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

class Chapter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'toocomic:chapter';
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
        ini_set('memory_limit', '128M');
        $this->url = \App\Comic::where(['series_id'=>8])->select('href','id')->get();
        $this->totalPageCount = count($this->url);
        $client = new Client();

        $requests = function ($total) use ($client) {
            foreach ($this->url as $uri) {
                yield function() use ($client, $uri) {
                    return $client->getAsync(str_replace("https","http",$uri->href));
                };
            }
        };

        $pool = new Pool($client, $requests($this->totalPageCount), [
            'concurrency' => $this->concurrency,
            'fulfilled'   => function ($response, $index){
                $this->index = $index;
                echo '爬取'.$this->url[$this->index]->href.PHP_EOL;
                $http = $response->getBody()->getContents();
                $crawler = new Crawler();
                $crawler->addHtmlContent($http);
//                if ($response->getStatusCode() == 200){

                    $arr = $crawler->filter('#glo_contents > div.inner.episode-contents > section.ep-body > ol > li')->each(function ($node,$i) use ($http) {
                        $data['comic_img_url'] = $node->filter('li > a > div.cell-thumb > div > img')->attr('data-original');
                        $data['chapter'] = $node->filter('li > a > div.cell-title > strong')->text();
                        $data['comic_id'] = $this->url[$this->index]->id;
                        $data['number'] =  $i;
                        $data['created_at'] = date('Y-m-d H:i:s');
                        $data['updated_at'] = date('Y-m-d H:i:s');
                        $data['mark'] = env('MARK');
                        $data['href'] = $node->filter('li > a')->attr('onclick');
                        return $data;
                    });
                    dd($arr);
                    $bool = DB::table('comic')->insert($arr);
                    if ($bool){
                        echo 'success'.PHP_EOL;
                    }else{
                        echo 'fail'.PHP_EOL;
                    }
//                }
                echo $response->getStatusCode().PHP_EOL;
                $this->countedAndCheckEnded();
            },
            'rejected' => function ($reason, $index){
//                    log('test',"rejected" );
//                    log('test',"rejected reason: " . $reason );
                $this->countedAndCheckEnded();
            },
        ]);

        $promise = $pool->promise();
        $promise->wait();

    }

    public function countedAndCheckEnded()
    {
        if ($this->counter < $this->totalPageCount){
            return;
        }
    }
}
