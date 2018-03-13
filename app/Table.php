<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Table extends Model
{
    /**
     * @return mixed
     */
    public static function getData(){
        $data = DB::table('importData')->get();

        return $data;
    }
}
