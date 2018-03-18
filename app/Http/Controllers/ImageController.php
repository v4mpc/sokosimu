<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Image;

class ImageController extends Controller
{
    public function dropzoneFileUploadPost(Request $request){

        

        $imageName = time().'.'.$request->file->getClientOriginalExtension();

        $request->file->move(public_path('images'), $imageName);

        return response()->json(['success'=>$imageName]);

    }
}
