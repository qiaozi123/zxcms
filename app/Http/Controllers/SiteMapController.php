<?php

namespace App\Http\Controllers;

use App\Model\Article;

class SiteMapController extends Controller
{
    public function index($id=0)
    {
        $data = Article::where([])->orderBy('created_at', 'desc')->skip(3000*$id)->limit(3000)->get();
        return response()->view('web.sitemap', [
            'data' => $data,
        ])->header('Content-Type', 'text/xml');
    }


}
