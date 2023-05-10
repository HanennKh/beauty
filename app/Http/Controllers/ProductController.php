<?php

namespace App\Http\Controllers;

use App\Models\Gategory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        return view('product.create',[
            'categories'=>Gategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
               'name' => 'required',
               'date' => 'required',
               'price' => 'required',
               'cost_price' => 'required',
               'description' => 'required',
               'photo' => 'required'
                ]);


            $requestdata=$request->all();
            $filename=time().$request->file('photo')->getClientOriginalName();
            $path=$request->file('photo')->storeAs('image',$filename,'public');
            $requestdata["photo"]='/storage/'.$path;
            Product::create($requestdata);

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $products=Product::all();
        return view('product.show',compact('products'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product=Product::findorfail($id);

        return view('product.edit',compact('product',[
            'categories'=>Gategory::all()
        ]));
        return redirect()->route('product.show');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
               'name' => 'required',
               'date' => 'required',
               'price' => 'required',
               'cost_price' => 'required',
               'description' => 'required',
               'photo' => 'required'
                ]);
            $product=Product::findorfail($id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('product.show');
    }
    public function destroyall()
    {
        Product::destroyall();
        return redirect()->route('product.show');
    }

}
