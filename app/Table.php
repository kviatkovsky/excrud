<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Table extends Model
{
    /**
     * @return mixed
     */
    public static function getData()
    {
        $data = DB::table('importData')->get();

        return $data;
    }

    /**
     * @param array $request request
     */
    public static function create(array $request): void
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
    }

    /**
     * @param array $request request
     * @param int $id id
     * @return array
     */
    public static function updateEntity(array $request, int $id)
    {
        if (empty($request)) {
            $data = DB::table('importData')->where('id', '=', $id)->get();
            if (false === empty($data)) {
                return json_decode($data, true);
            }
        } else {
            $status = DB::table('importData')
                ->where('id', '=', $id)
                ->update(
                    [
                        'first_name' => $request['first_name'],
                        'last_name' => $request['last_name'],
                        'salutation' => $request['salutation'],
                        'years' => $request['years'],
                        'position' => $request['position'],
                        'salary' => $request['salary'],
                    ]
                );
        }
        return (isset($status)) ? $status : $request;
    }

    public static function destroy($id): bool
    {
        $status = DB::table('importData')->where('id', '=', $id)->delete();
        return $status;
    }
}
