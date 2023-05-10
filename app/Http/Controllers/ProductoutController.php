<?php

namespace App\Http\Controllers;

use App\Models\Productout;
use Illuminate\Http\Request;

class ProductoutController extends Controller
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
        return view('productout.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'invoiceouts_id' => 'required','unique:invoiceins',
               'products_id' => 'required','unique:invoiceins',
               'quantity_out'=>'required',
               'price'=>'required'

             ]);

          $productout=new Productout();
          $productout->invoiceouts_id=$request->invoiceouts_id;
          $productout->products_id=$request->products_id;
          $productout->quantity_out=$request->quantity_out;
          $productout->price=$request->price;

          $productout->save();

          return ("ADDING SUCCESSFLLY");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $productouts=Productout::all();
        return view('productout.show',compact('productouts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $productout=Productout::findorfail($id);
        return view('productout.edit',compact('productout'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'invoiceouts_id' => 'required','unique:invoiceins',
               'products_id' => 'required','unique:invoiceins',
               'quantity_out'=>'required',
               'price'=>'required'

             ]);

          $productout= Productout::findorfail($id);
          $productout->invoiceouts_id=$request->invoiceouts_id;
          $productout->products_id=$request->products_id;
          $productout->quantity_out=$request->quantity_out;
          $productout->price=$request->price;

          $productout->save();

          return redirect()->route('productout.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productout=Productout::destroy($id);
        return redirect()->route('productout.show');
    }
    public function destroyall()
    {
        Productout::destroyall();
        return redirect()->route('productout.show');
    }
}
