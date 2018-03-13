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
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        Table::create(Request::all());

        return view('form.addRecord');
    }

    /**
     * @param int $id id
     */
    public function show(int $id)
    {
        //
    }

    /**
     * @param int $id id
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * @param Request $request request
     * @param int $id id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request, int $id)
    {
        $dataById = Table::updateEntity(Request::all(), $id);
        $dataById = $dataById[0];
        return view('form.addRecord', compact('dataById'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @TODO show status
     *
     * @param  int $id id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $status = Table::destroy($id);
        return view('home');
    }
}
