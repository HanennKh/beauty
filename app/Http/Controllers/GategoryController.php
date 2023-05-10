<?php

namespace App\Http\Controllers;

use App\Models\Gategory;
use Illuminate\Http\Request;

class GategoryController extends Controller
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
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([


            'name' => 'required',
            'photo' => 'required'
        ]);

        $requestdata=$request->all();
        $filename=time().$request->file('photo')->getClientOriginalName();
        $path=$request->file('photo')->storeAs('image',$filename,'public');
        $requestdata["photo"]='/storage/'.$path;
        Gategory::create($requestdata);

         return ('ADDING SUCCESSFULLY');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $categorys=Gategory::all();
        return view('category.show',compact('categorys'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category=Gategory::findorfail($id);
        return view('cat.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
           'photo' => 'required',
          ]);
           $category=Gategory::findorfail($id);

           //$category->cat_id=$request->cat_id;
           $category->name=$request->name; $requestdata=$request->all();


           $filename=time().$request->file('photo')->getClientOriginalName();
           $path=$request->file('photo')->storeAs('image',$filename,'public');
           $requestdata["photo"]='/storage/'.$path;
           Gategory::create($requestdata);
          $category->photo=$request->photo;

          $category->save();
           return redirect()->route('category.show');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Gategory::destroy($id);
        return redirect()->route('category.show');

    }
    public function destroyall()
    {
        Gategory::destroyall();
        return redirect()->route('category.show');
    }

}
