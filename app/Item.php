<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    public $fillable = ['first_name','last_name','salutation','years','position','salary'];

    public static function getData(){
        $data = DB::table('importData')->get();

        return $data;
    }
}
