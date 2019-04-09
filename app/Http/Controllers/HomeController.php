<?php

namespace App\Http\Controllers;

use App\Model\UserPost;
use App\Model\WebConf;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $data = WebConf::find(1);
        return view('web.index',compact('data'));
    }

    public function UserPost(Request $request)
    {
        $area = $request->input('area');
        $telphone = $request->input('telphone');
        $userpost = new  UserPost();
        $userpost->area = $area;
        $userpost->telphone = $telphone;
        $bool = $userpost->save();
        if ($bool){
            return response()->json(['msg'=>'您的需求我们已经收到了','status'=>200]);
        }else{
            return response()->json(['msg'=>'提交失败,请稍后再试','status'=>500]);
        }
    }

    public function gongdipost(Request $request)
    {
        $area = $request->input('area');
        $telphone = $request->input('telphone');
        $type = $request->input('type');
        $userpost = new  UserPost();
        $userpost->area = $area;
        $userpost->telphone = $telphone;
        $userpost->type = $type;
        $bool = $userpost->save();
        if ($bool){
            return response()->json(['msg'=>'您的需求我们已经收到了','status'=>200]);
        }else{
            return response()->json(['msg'=>'提交失败,请稍后再试','status'=>500]);
        }
    }

}
