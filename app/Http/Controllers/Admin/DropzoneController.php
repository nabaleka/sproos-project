<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DropzoneController extends Controller
{
        /**

     * Generate Image upload View

     *

     * @return void

     */

     public function dropzone()
     
         {
     
             return view('admin/dropzone');
     
         }
     
     
         /**
     
          * Image Upload Code
     
          *
     
          * @return void
     
          */
     
         public function dropzoneStore(Request $request)
     
         {
     
             $image = $request->file('file');
     
             $imageName = time().$image->getClientOriginalName();
     
             $image->move(public_path('images'),$imageName);
     
             return response()->json(['success'=>$imageName]);
     
         }
}
