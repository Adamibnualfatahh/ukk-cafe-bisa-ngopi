<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoretransactionRequest;
use App\Http\Requests\UpdatetransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $randomString = Str::random(5);
        return view('coba',['random' => $randomString]);
    }

    public function dash_transaksi()
    {
        $randomString = Str::random(5);
        return view('dashboard.transaksi',['random' => $randomString]);
    }
    
    public function dash_home()
    {
        $randomString = Str::random(5);
        return view('dashboard.index',['random' => $randomString]);
    }
    public function dash_laporan()
    {
        $randomString = Str::random(5);
        return view('dashboard.laporan',['random' => $randomString]);
    }

    public function dash_log()
    {
        $randomString = Str::random(5);
        return view('dashboard.log',['random' => $randomString]);
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
     * @param  \App\Http\Requests\StoretransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetransactionRequest  $request
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetransactionRequest $request, transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaction $transaction)
    {
        //
    }
}
