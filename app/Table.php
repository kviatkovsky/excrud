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

    /**
     * @param array $request request
     * @return array
     */
    public static function create(array $request): array
    {
        DB::table('importData')->insert(
            [
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'salutation' => $request['salutation'],
                'years' => $request['years'],
                'position' => $request['position'],
                'salary' => $request['salary'],
            ]
        );

        return $request;
    }
}
