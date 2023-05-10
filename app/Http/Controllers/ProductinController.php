<?php

namespace App\Http\Controllers;

use App\Models\Productin;
use Illuminate\Http\Request;

class ProductinController extends Controller
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
        return view('productin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'invoiceins_id' => 'required','unique:invoiceins',
               'products_id' => 'required','unique:invoiceins',
               'quantity_in'=>'required',
               'price'=>'required'

             ]);

          $productin=new Productin();
          $productin->invoiceins_id=$request->invoiceins_id;
          $productin->products_id=$request->products_id;
          $productin->quantity_in=$request->quantity_in;
          $productin->price=$request->price;

          $productin->save();

          return ("ADDING SUCCESSFLLY");

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $productins=Productin::all();
        return view('productin.show',compact('productins'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $productin=Productin::findorfail($id);
        return view('productin.edit',compact('productin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([

            'invoiceins_id' => 'required','unique:invoiceins',
               'products_id' => 'required','unique:invoiceins',
               'quantity_in'=>'required',
               'price'=>'required'

             ]);

          $productin=Productin::findorfail($id);
          $productin->invoiceins_id=$request->invoiceins_id;
          $productin->products_id=$request->products_id;
          $productin->quantity_in=$request->quantity_in;
          $productin->price=$request->price;

          $productin->save();

          return redirect()->route('productin.show');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productin=Productin::destroy($id);
        return redirect()->route('productin.show');
    }
    public function destroyall()
    {
        Productin::destroyall();
        return redirect()->route('productin.show');
    }
}
