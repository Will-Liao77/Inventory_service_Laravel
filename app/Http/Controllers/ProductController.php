<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return 'hahatest';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        $request->validate([
            'owner' => 'required',
            'name' => ['required','unique:products'],
            'price' => 'required',
            'amount' => 'required',
        ]);
        
        $product = new Product;
        $product->owner = request('owner');
        $product->name = request('name');
        $product->price = request('price');
        $product->amount = request('amount');
        $product->save();

        #return 'Product has been created!';
        return redirect()->to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        //dd($product);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $product)
    {
        //
        $request->validate([
            'owner' => 'required',
            'name' => 'required',
            'price' => 'required',
            'amount' => 'required',
        ]);
        $product->owner = request('owner');
        $product->name = request('name');
        $product->price = request('price');
        $product->amount = request('amount');
        $product->save();
        return redirect()->route('product.edit', [$product->id])->with('success',true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();

        return redirect()->to('/');
    }
}
