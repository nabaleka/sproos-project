<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Products;
use Image;
use Illuminate\Support\Facades\DB;
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
        $products = DB::table('products')
       ->where('seller_id', '=', Auth::guard('seller')->user()->id)
        ->get();
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
        return view('seller.products',compact('categories'));
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
            'description'=>'required',
            'stock' => 'required',
            'category'=>'required',
            'slug'=>'nullable',
            'image' => 'image|nullable|max:2048|required',
            'image2' => 'image|nullable|max:2048|required',
            'image3' => 'image|nullable|max:2048|required',
            'image4' => 'image|nullable|max:2048|required',
            ]);

           
            
            
            
        //handle file upload
        if ($request->hasFile('image')) 
        {
           //$imageName = $request->file('image')->store('public/products');
           //Upload a copy to another folder
          // $imageName = Storage::disk('uploads')->putFile('products',$request->file('image'));
          $product_image = $request->file('image');
          //resize
          $img = Image::make($product_image)->fit(400,null, function($constraint){
              $constraint->upsize();
          })->encode('jpg');
          $image_name = "one_".time().'jpg';
          $img->save('uploads/products/'.$image_name);
          //Upload a copy to another folder
          //$imageName = Storage::disk('uploads')->put('products',$img->save($image_name));
          # Update the database
          $imageName = 'products/'.$image_name;
           
           ##$url = Storage::disk('uploads')->url('file1.jpg');
        }
        else
        {
            return 'Please select image';
        }

if ($request->hasFile('image4')) 
        {
           //$imageName4 = $request->file('image4')->store('public/products');
           //Upload a copy to another folder
           $product_image = $request->file('image4');
           //resize
           $img = Image::make($product_image)->fit(400,null, function($constraint){
               $constraint->upsize();
           })->encode('jpg');
           $image_name = "four_".time().'jpg';
           $img->save('uploads/products/'.$image_name);
           //Upload a copy to another folder
           //$imageName = Storage::disk('uploads')->put('products',$img->save($image_name));
           # Update the database
           $imageName4 = 'products/'.$image_name;
           //$imageName4 = Storage::disk('uploads')->putFile('products',$request->file('image4'));
           ##$url = Storage::disk('uploads')->url('file1.jpg');
        }
        else
        {
            return 'Please select image';
        }
        if ($request->hasFile('image2')) 
        {
           //$imageName2 = $request->file('image2')->store('public/products');
           //Upload a copy to another folder
           $product_image = $request->file('image2');
           //resize
           $img = Image::make($product_image)->fit(400,null, function($constraint){
               $constraint->upsize();
           })->encode('jpg');
           $image_name = "two_".time().'jpg';
           $img->save('uploads/products/'.$image_name);
           //Upload a copy to another folder
           //$imageName = Storage::disk('uploads')->put('products',$img->save($image_name));
           # Update the database
           $imageName2 = 'products/'.$image_name;
          // $imageName2 = Storage::disk('uploads')->putFile('products',$request->file('image2'));
           ##$url = Storage::disk('uploads')->url('file1.jpg');
        }
        else
        {
            return 'Please select image';
        }
        if ($request->hasFile('image3')) 
        {
           //$imageName3 = $request->file('image3')->store('public/products');
           //Upload a copy to another folder
           $product_image = $request->file('image3');
           //resize
           $img = Image::make($product_image)->fit(400,null, function($constraint){
               $constraint->upsize();
           })->encode('jpg');
           $image_name = "three_".time().'jpg';
           $img->save('uploads/products/'.$image_name);
           //Upload a copy to another folder
           //$imageName = Storage::disk('uploads')->put('products',$img->save($image_name));
           # Update the database
           $imageName3 = 'products/'.$image_name;
           
           //$imageName3 = Storage::disk('uploads')->putFile('products',$request->file('image3'));
           ##$url = Storage::disk('uploads')->url('file1.jpg');
        }
        else
        {
            return 'Please select image';
        }
        //Create the product
        $products = new Products;
        $products->image =$imageName;
        $products->image2=$imageName2;
        $products->image3 =$imageName3;
        $products->image4= $imageName4;
        $products->seller_id = $request->seller_id; ;
        $products->name = $request->name;
        $products->stock = $request->stock;
        $products->category_id=$request->category;
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
        $products = Products::find($id);
        //get all images to delete
        $imagetoDelete = $products->image;
        $imagetoDelete2 = $products->image2;
        $imagetoDelete3 = $products->image3;    
        $imagetoDelete4 = $products->image4;
        

        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
           
            ]);

        if ($request->hasFile('image')) {
            //Delete previous image
            Storage::disk('uploads')->delete($imagetoDelete);

            //Get the image from the request
            $product_image = $request->file('image');
            //resize
            $img = Image::make($product_image)->fit(400,null, function($constraint){
                $constraint->upsize();
            })->encode('jpg');
            $image_name = "one_".time().'jpg';
            $img->save('uploads/products/'.$image_name);
            //Upload a copy to another folder
            //$imageName = Storage::disk('uploads')->put('products',$img->save($image_name));
            # Update the database
            $products->image = 'products/'.$image_name;
        }

        if ($request->hasFile('image2')) {
            //Delete previous image
            //Get the image from the request
            Storage::disk('uploads')->delete($imagetoDelete2);
            $product_image = $request->file('image2');
            //resize
            $img = Image::make($product_image)->fit(400,null, function($constraint){
                $constraint->upsize();
            })->encode('jpg');
            $image_name = "two_".time().'jpg';
            $img->save('uploads/products/'.$image_name);
            //Upload a copy to another folder
            //$imageName = Storage::disk('uploads')->put('products',$img->save($image_name));
            # Update the database
            $products->image2 = 'products/'.$image_name;
        }

        if ($request->hasFile('image3')) {
            //Delete previous image
            Storage::disk('uploads')->delete($imagetoDelete3);
            $product_image = $request->file('image3');
            //resize
            $img = Image::make($product_image)->fit(400,null, function($constraint){
                $constraint->upsize();
            })->encode('jpg');
            $image_name = 'three_'.time().'jpg';
            $img->save('uploads/products/'.$image_name);
            //Upload a copy to another folder
            //$imageName = Storage::disk('uploads')->put('products',$img->save($image_name));
            # Update the database
            $products->image3 = 'products/'.$image_name;
        }

        if ($request->hasFile('image4')) {
            //Delete previous image
            Storage::disk('uploads')->delete($imagetoDelete4);
            $product_image = $request->file('image4');
            //resize
            $img = Image::make($product_image)->fit(400,null, function($constraint){
                $constraint->upsize();
            })->encode('jpg');
            $image_name = 'four_'.time().'jpg';
            $img->save('uploads/products/'.$image_name);
            //Upload a copy to another folder
            //$imageName = Storage::disk('uploads')->put('products',$img->save($image_name));
            # Update the database
            $products->image4 = 'products/'.$image_name;
        }      
        
        
        $products->seller_id = Auth::id();
        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->slug = $request->slug;
        $products->stock= $request->stock;
        $products->category_id=$request->category;
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
        
        //delete from folder in uploads
        $product = Products::findOrFail($id);

        //get all images to delete
        $imagetoDelete = $product->image;
        $imagetoDelete2 = $product->image2;
        $imagetoDelete3 = $product->image3;    
        $imagetoDelete4 = $product->image4;

        //delete them individually
        Storage::disk('uploads')->delete($imagetoDelete);
        Storage::disk('uploads')->delete($imagetoDelete2);
        Storage::disk('uploads')->delete($imagetoDelete3);
        Storage::disk('uploads')->delete($imagetoDelete4);

        //delete from database
        Products::where('id',$id)->delete();

        return redirect(route('products.index'));
    }

    public function seller_orders(){
        $orders = DB::table('order_details')
                  ->leftJoin('products', 'products.id', '=', 'order_details.product_id')
                  ->leftJoin('orders', 'orders.unique_order_id', '=', 'order_details.unique_order_id')
                 ->where('orders.seller_id', '=', Auth::guard('seller')->user()->id)
                  ->get();
         return view('seller/seller-orders',compact('orders'));
     
        }
     
      public function seller_invoices(){
         
        }
     public function order_details($id){
          $details= DB::table('users')
                 ->leftJoin('order_details', 'users.id', '=', 'order_details.user_id')
                 ->get()->first();
         return view('seller/seller-details',compact('details'));
     
         
        }
}
