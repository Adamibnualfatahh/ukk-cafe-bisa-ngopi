<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\transaction;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
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
        $cari = product::latest();
        if(request('search')){
            $cari->where('kode_produk', 'like', '%' . request('search'). '%')->orWhere('product_name', 'like', '%' . request('search'). '%')->orWhere('value', 'like', '%' . request('search'). '%')->orWhere('amount', 'like', '%' . request('search'). '%');
        }
        $i=1;
        $query = DB::select('SELECT * FROM  transactions INNER JOIN users ON transactions.id_user = 
        users.id INNER JOIN products ON transactions.kode_produk = products.kode_produk  ');
        
        $randomString = Str::random(5);
        return view('dashboard.transaksi',['random' => $randomString,'query'=>$query,'cari'=>$cari,'i'=>$i]);
    }
    
    public function dash_home()
    {
        $randomString = Str::random(5);
        return view('dashboard.index',['random' => $randomString]);
    }
   

     public function kasir()
    {
        // ('SELECT SUM(amount) as jumlah FROM products');
        $i = 1;
        $produk =  DB::select('Select * FROM products where value > 0');
        return view('kasir.index',['produk' => $produk,'i'=>$i]);
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
