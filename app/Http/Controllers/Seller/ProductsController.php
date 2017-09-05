<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use App\Model\Admin\subcategories;
use App\Model\Admin\categories;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
    * Only sellers allowed.
    */
    public function __construct()
    {
        $this->middleware('auth:seller');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show page
        $products = Products::all();
        return view('seller.viewProducts',compact('products'));
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
        return view('seller.products',compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'slug' => 'required',
            'image' => 'image|nullable|max:1999',
            ]);
            
        //handle file upload
        if ($request->hasFile('image')) 
        {
           $imageName = $request->file('image')->store('public/products');
           //Upload a copy to another folder
           Storage::disk('uploads')->putFile('products/',$request->file('image'));
           ##$url = Storage::disk('uploads')->url('file1.jpg');
        }
        else
        {
            return 'Please select image';
        }

        //Create the product
        $products = new Products;
        $products->image=$imageName;
        $products->seller_id= $request->seller_id;
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
        //
        $products = Products::where('id',$id)->first();
        $subcategories = subcategories::all();
        $categories = categories::all();

        return view('seller.editProducts',compact('subcategories','categories','products'));
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
        //
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'slug' => 'required',
            'image' => 'required',
            ]);

        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public/products');
            //Upload a copy to another folder
            Storage::disk('uploads')->putFile('products/',$request->file('image'));
            ##$url = Storage::disk('uploads')->url('file1.jpg');
        }else{
            return 'No';
        }

        $products = Products::find($id);
        $products->image = $imageName;
        $products->seller_id= $request->seller_id;
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
        //
        Products::where('id',$id)->delete();
        return redirect()->back();
    }
}
