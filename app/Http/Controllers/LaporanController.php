<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use App\Models\transaction;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorelaporanRequest;
use App\Http\Requests\UpdatelaporanRequest;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $feb =  DB::table('transactions')->where('created_at','LIKE','%-02-%')
                      ->get('value_product');
  
        $randomString = Str::random(5);
        return view('dashboard.laporan',['random' => $randomString,'feb'=> $feb]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorelaporanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelaporanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelaporanRequest  $request
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelaporanRequest $request, laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(laporan $laporan)
    {
        //
    }
}
