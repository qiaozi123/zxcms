<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Nav extends Model
{
    protected $table ='navs';

    public static function nav()
    {
        $nav = Nav::where(['use_type'=>1])->get();
        return $nav;
    }

    public static function TDK($name)
    {
        $nav = Nav::where(['use_type'=>1,'en_name'=>$name])->first();
        return $nav;
    }
}
