<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Model\Admin\subcategories;
use App\Model\Admin\categories;
use App\Model\Admin\products;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    */
    public function index()
    {
         $products = products::all();
       return view('admin.viewProducts',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $subcategories =subcategories::all();
           $categories =categories::all();
        return view('admin.products',compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'slug' => 'required',
            'image' => 'required',
            ]);
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }else{
            return 'No';
        }
        $products = new products;
        $products->image = $imageName;
        $products->name = $request->name;
        $products->price = $request->price;
        $products->slug = $request->slug;
        $products->description = $request->description;
        $products->save();
        
        return redirect(route('products.index'));
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
    public function edit($id)
    {
         $products = products::where('id',$id)->first();
            $subcategories =subcategories::all();
            $categories =categories::all();
            return view('admin.editProducts',compact('subcategories','categories','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'slug' => 'required',
            'image' => 'required',
            ]);
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }else{
            return 'No';
        }
        $products = products::find($id);
        $products->image = $imageName;
        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->slug = $request->slug;
        $products->categories()->sync($request->categories);
        $products->subcategories()->sync($request->subcategories);
        $products->save();
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        products::where('id',$id)->delete();
        return redirect()->back();
    }
}
