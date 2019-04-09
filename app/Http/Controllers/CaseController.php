<?php

namespace App\Http\Controllers;

use App\Model\Cases;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CaseController extends Controller
{
    public function index()
    {
        $data = Cases::where([])->orderby('id','desc')->paginate(6);
        return view('web.case.list',compact('data'));
    }

    public function show($id)
    {
        $data = Cases::find($id);
        return view('web.case.show',compact('data'));
    }
}
