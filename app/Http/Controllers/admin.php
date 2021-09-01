<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class admin extends Controller
{
    public function  save_product(Request $request)
     {
     	$request->validate([
                'name'        =>      'required',
                'file'         =>      'required',
               
            ]);

          
          $user =new product;
          $user->name = $request->input('name');
          $user->dis =$request->input('dis');
          $user->price =$request->input('price');
          
          
          
          $user->file = $request->file;

          if($request->hasFile('file'))
          {
          $file=$request->file('file');
          $extension=$request->file->extension();
          $fileName=time()."_.".$extension;
          $request->file->move('upload/images/',$fileName);
          $user->file =$fileName;
          }


          $user->save();
          if(!is_null($user)) {
            return back()->with('success', 'Product Successfully Add.');
          }
          else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
              }




     }
}
