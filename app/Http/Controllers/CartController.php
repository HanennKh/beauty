<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
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
        return view('cart.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([


             'customers_id' => 'required','unique:carts',
             'date' => 'required',
             'confirmation' => 'nullable'
           ]);

        $cart=new Cart();
        $cart->customers_id=$request->customers_id;

        $cart->date=$request->date;
        $cart->confirmation=$request->confirmation;
        $cart->save();

        return ("ADDING SUCCESSFLLY");

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $carts=Cart::all();
        return view('cart.show',compact('carts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cart=Cart::findorfail($id);
        return view('cart.edit',compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([


            'customers_id' => 'required','unique:carts',
            'date' => 'required',
           'confirmation' => 'nullable'


        ]);

        $cart=Cart::findorfail($id);
        $cart->customers_id=$request->customers_id;
        $cart->date=$request->date;
        $cart->confirmation=$request->confirmation;
        $cart->save();
        return redirect()->route('cart.show');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cart::destroy($id);
        return redirect()->route('cart.show');
    }
    public function destroyall()
    {
        Cart::destroyall();
        return redirect()->route('cart.show');
    }
}
