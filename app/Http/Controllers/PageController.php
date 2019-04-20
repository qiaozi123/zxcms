<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Cases;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function index()
    {
        $data = Article::where([])->orderby('id','desc')->paginate(6);
        $hot = Article::where([])->orderby('id','desc')->limit(6)->get();
        $case = Cases::where([])->orderby('id','desc')->limit(6)->get();
        return view('web.page.list',compact('data','hot','case'));
    }

    public function show($id)
    {
        $data = Article::find($id);
        $hot = Article::where([])->orderby('id','desc')->limit(6)->get();
        $case = Cases::where([])->orderby('id','desc')->limit(6)->get();
        return view('web.page.show',compact('data','hot','case'));
    }


}
