<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Model\Admin\subcategories;
use App\Model\Admin\categories;
use App\Model\Admin\products;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $categories = categories::all();
        return view('admin.viewCategories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories');
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|nullable|max:1999|required',
            ]);

        if ($request->hasFile('image')) 
        {
            //Upload the image
            $imageName = Storage::disk('uploads')->putFile('categories',$request->file('image'));
        } else
        {
            return 'Please select a product image';
        }

        $category = new categories;
        $category->title = $request->title;
        $category->description = $request->description;
        $category->slug = $request->slug;
        $category->image = $imageName;
        $category->save();
        return redirect(route('category.index'));
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
        $categories = categories::where('id',$id)->first();
        return view('admin.editCategories',compact('categories'));
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|nullable|max:1999',
            ]);

        $category = categories::find($id);
        if ($request->hasFile('image')) 
        {
            //Upload the image
            $imageName = Storage::disk('uploads')->putFile('categories',$request->file('image'));
            $category->image = $imageName;
        }
        $category->title = $request->title;
        $category->description = $request->description;
        $category->slug = $request->slug;
        $category->save();
        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = categories::findOrFail($id);
        $imageName = $category->image; 
        /* Delete the image from storage */
        Storage::disk('uploads')->delete($imageName);
        categories::where('id',$id)->delete();   
        return redirect()->back();
    }
}
