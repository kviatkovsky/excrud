<?php

namespace App\Http\Controllers;

use App\Table as Table;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Table::getData();
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.addRecord');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store()
    {
        Table::create(Request::all());

        return redirect()->to('/');
    }

    /**composer require "maatwebsite/excel:~2.1.0"
     * @param int $id id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(int $id)
    {
        $dataById = Table::updateEntity(Request::all(), $id);
        if(isset($dataById) && $dataById === 1){
            return redirect()->to('/');
        }
        $dataById = (isset($dataById[0])) ? $dataById[0] : $dataById;

        return view('form.addRecord', ['dataById'=>$dataById, 'id'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Table::destroy($id);
        return back();

    }
}
