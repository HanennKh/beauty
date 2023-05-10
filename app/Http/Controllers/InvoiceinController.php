<?php

namespace App\Http\Controllers;

use App\Models\Invoicein;
use Illuminate\Http\Request;

class InvoiceinController extends Controller
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
        return view('invoicein.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

         'customers_id' => 'required','unique:invoiceins',
            'date_in' => 'required',

          ]);

       $invoicein=new Invoicein();
       $invoicein->customers_id=$request->customers_id;

       $invoicein->date_in=$request->date_in;

       $invoicein->save();

       return ("ADDING SUCCESSFLLY");

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $invoiceins=Invoicein::all();
        return view('invoicein.show',compact('invoiceins'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $invoicein=Invoicein::findorfail($id);
        return view('invoicein.edit',compact('invoicein'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([

            'customers_id' => 'required','unique:invoiceins',
               'date_in' => 'required',

             ]);

             $invoicein=invoicein::findorfail($id);
          $invoicein->customers_id=$request->customers_id;

          $invoicein->date_in=$request->date_in;
          $invoicein->save();
             return redirect()->route('invoicein.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Invoicein::destroy($id);
        return redirect()->route('invoicein.show');

    }
    public function destroyall()
    {
        Invoicein::destroyall();
        return redirect()->route('invoicein.show');
    }

}
