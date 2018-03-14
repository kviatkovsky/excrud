<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;


class ItemController extends Controller
{
    public function importExport()
    {
        return view('importExport');
    }

    public function downloadExcel($type)
    {
        $data = Item::getData()->toArray();
        foreach ($data as &$record){
//            var_dump($record);die;
            $record = (array) $record;
        }
//        var_dump($data);die;
        return Excel::create('exported_file', function ($excel) use ($data) {
            $excel->sheet('mySheet', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcel()
    {
        if (Input::hasFile('import_file')) {
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function ($reader) {
            })->get();
            if (!empty($data) && $data->count()) {
                foreach ($data as $key => $value) {
                    $insert[] = [
                        'first_name' => $value['imya'],
                        'last_name' => $value['famimliya'],
                        'salutation' => $value['otchestvo'],
                        'years' => $value['god._rozhdeniya'],
                        'position' => $value['dolzhnost'],
                        'salary' => $value['zp_v_god.'],
                    ];
                };
                if (!empty($insert)) {
                    DB::table('importData')->insert($insert);
                    return back();
                }
            }
        }
        return back();
    }
}