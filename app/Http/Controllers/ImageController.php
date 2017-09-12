<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageController extends Controller
{
    public function resizeImage(){
        return view('resizeImage');
    }

    public function resizeImagePost(Request $request){
        $this->validate($request ,[
            'title'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        //Get the image from the request
        $image = $request->file('image');

        if($request->hasFile('image')){
            
        
        //create an image name
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        //Set the destionation path
        $destinationPath = public_path().'/thumbnail';
        $img = Image::make($image->getRealPath());

        //resize the image
        $img->resize(100,100, function ($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        //Set a new destionation path
        $destinationPath = public_path('/images');
        //$img->move($destinationPath, $input['imagename']);
        $img->save($destinationPath.'/'.$input['imagename']);

       // $this->$postImage->add($input['imagename']);

    }
        

        return redirect()->back()->with('success','Image Upload Successful')->with('imagename', $input['imagename']);
    }
}
