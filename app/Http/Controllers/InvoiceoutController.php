<?php

namespace App\Http\Controllers;

use App\Models\Invoiceout;
use Illuminate\Http\Request;

class InvoiceoutController extends Controller
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
        return view('invoiceout.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'customers_id' => 'required','unique:invoiceins',
               'date_out' => 'required',

             ]);

          $invoiceout=new Invoiceout();
          $invoiceout->customers_id=$request->customers_id;

          $invoiceout->date_out=$request->date_out;

          $invoiceout->save();

          return ("ADDING SUCCESSFLLY");

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $invoiceouts=Invoiceout::all();
        return view('invoiceout.show',compact('invoiceouts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $invoiceout=Invoiceout::findorfail($id);
        return view('invoiceout.edit',compact('invoiceout'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'customers_id' => 'required','unique:invoiceins',
            'date_out' => 'required',

             ]);

             $invoiceout=invoiceout::findorfail($id);
          $invoiceout->customers_id=$request->customers_id;

          $invoiceout->date_out=$request->date_out;
          $invoiceout->save();
             return redirect()->route('invoiceout.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Invoiceout::destroy($id);
        return redirect()->route('invoiceout.show');


    }

    public function destroyall()
    {
        Invoiceout::destroyall();
        return redirect()->route('invoiceout.show');
    }
}
