<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
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
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([


            'name' => 'required',
           'password' => 'required|min:9',
           'phone' => 'required|min:9',
           'mail' => 'required|unique:customers,mail'
        ]);

        $customer= new Customer();
        $customer->name=$request->name;
        $customer->password=md5($request->password);
        $customer->phone=$request->phone;
        $customer->mail=$request->mail;
        $customer->save();
        return ('ADDING SUCCESSEFLLY');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $customers=Customer::all();
        return view('customer.show',compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customer=Customer::findorfail($id);
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    /*    $request->Validate([


            'name' => 'required',
           'password' => 'required|min:9',
           'phone' => 'required|min:9',
           'mail' => 'required|unique:customers,mail'
        ]);*/
        $customer= new Customer();

         $customer->name=$request->name;
         $customer->password=md5($request->password);
         $customer->phone=$request->phone;
         $customer->mail=$request->mail;
         //$customer->save();
         return redirect()->route('customer.show');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect()->route('customer.show');
    }
    public function destroyall()
    {
        Customer::destroyall();
        return redirect()->route('customer.show');
    }

}
