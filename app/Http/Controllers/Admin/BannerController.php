<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Banner;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $message;
    
    public function index()
    {
        //
        $message="";
        $banner = Banner::all();
        return view('admin.dropzone',compact('banner','message'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            
            'banner' => 'image|nullable|max:1999|required',
            ]);
            
        //handle file upload

        $success = "image uploaded successfully!";
        $fail = "you need an image!";
        if ($request->hasFile('banner')) 
        {
           
           //Upload a copy to another folder
           $imageName = Storage::disk('uploads')->putFile('banners',$request->file('banner'));
           ##$url = Storage::disk('uploads')->url('file1.jpg');
        }

        else
        {
            $message = $fail;
            return redirect()->route('banner.index',['message'=>$message]);
        }
        //Create the product
        $banner = new Banner;
        $banner->banner = $imageName;
        
        $banner->save();
        $message = $success;
        
        return redirect()->route('banner.index',['message'=>$message]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner = Banner::findOrFail($id);
        $imageName = $banner->image;    
        Banner::where('id',$id)->delete();
        /* Delete the image from storage */
        Storage::disk('uploads')->delete($imageName);
        return redirect()->back();
    }
}
