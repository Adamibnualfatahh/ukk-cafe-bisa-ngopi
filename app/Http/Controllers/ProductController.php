<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habis = DB::select('Select * FROM products where value = "0"');

        
        $posts = product::latest();
        if(request('search')){
            $posts->where('kode_produk', 'like', '%' . request('search'). '%')->orWhere('product_name', 'like', '%' . request('search'). '%')->orWhere('value', 'like', '%' . request('search'). '%')->orWhere('amount', 'like', '%' . request('search'). '%');
        }

        $product = $posts->get();
        $randomString = Str::random(5);
        $i = 1;
        return view('dashboard.index', ['product' => $product,'random' => $randomString,'i' => $i,'habis'=>$habis]);
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
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
    {
       $request->validate([
            'kode_produk' => 'required',
            'product_name' => 'required',
            'amount' => 'required',
            'value' => 'required',
            
        ]);
  
        $input = $request->all();
    
        product::create($input);
     
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product,$id)
    {
        $product = product::findOrFail($id);
        return view('dashboard.ubahProduk',['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        $request->validate([
            'kode_produk' => '',
            'product_name' => '',
            'amount' => '',
            'value' => '',
            
        ]);
         $input = $request->all();
         $product->update($input);
         return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product , $id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect('/dashboard');
    }
}
