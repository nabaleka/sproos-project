<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Model\Admin\subcategories;
use App\Model\Admin\categories;
use App\Http\Controllers\Controller;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $subcategories = subcategories::all();
        return view('admin.viewSubcategories',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =categories::all();
        return view('admin.subcategories',compact('categories'));
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
            'title'=>'required',
            'slug' => 'required',
            ]);
        $subcatecories = new subcategories;
        $subcatecories->title = $request->title;
        $subcatecories->slug = $request->slug;
        $subcatecories->save();
        return redirect(route('subcategories.index'));
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
         $categories =categories::all();
        $subcategories = subcategories::where('id',$id)->first();
        return view('admin.editSubcategories',compact('subcategories','categories'));

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
           'title'=>'required',
            'slug' => 'required',
            ]);
        
        $subcatecories = subcategories::find($id);
        $subcatecories->title = $request->title;
        $subcatecories->slug = $request->slug;
        $subcatecories->save();
        return redirect(route('subcategories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        subcategories::where('id',$id)->delete();
        return redirect()->back();
    }
}
