<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WebConf extends Model
{
    protected $table = 'web_confs';

    public static function get()
    {
        return  WebConf::find(1);
    }
}
