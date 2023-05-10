<?php

namespace App\Http\Controllers;

use App\Models\ProductCart;
use Illuminate\Http\Request;

class ProductCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pc.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([


            'products_id' => 'required',
           'carts_id' => 'required',
           'price' => 'required',
           'discount' => 'required'
        ]);

        $pc= new ProductCart();
        $pc->products_id=$request->products_id;
        $pc->carts_id=$request->carts_id;
        $pc->price=$request->price;
        $pc->discount=$request->discount;
        $pc->save();
        return ('ADDING SUCCESSEFLLY');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $pcs=ProductCart::all();
        return view('pc.show',compact('pcs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pc=ProductCart::findorfail($id);
        return view('pc.edit',compact('pc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([


            'products_id' => 'required',
           'carts_id' => 'required',
           'price' => 'required',
           'discount' => 'required'
        ]);

        $pc= ProductCart::findorfail($id);
        $pc->products_id=$request->products_id;
        $pc->carts_id=$request->carts_id;
        $pc->price=$request->price;
        $pc->discount=$request->discount;
        $pc->save();
        return redirect()->route('pc.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pc=ProductCart::destroy($id);
           return redirect()->route('pc.show');
    }
    public function destroyall()
    {
        ProductCart::destroyall();
        return redirect()->route('pc.show');
    }
}
