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
    public function  product_dt($id)
    {      
        $user =product::find($id);
        return view('admin/product_dt' ,compact('user'));

    }
     public function  product_edit($id)
    {      
        $user =product::find($id);
        return view('admin/product_edit' ,compact('user'));

    }
    public function  product_update(Request $request,$id)
     {
     	$request->validate([
                'name'        =>      'required',
                
               
            ]);

          
          $user =product::find($id);
          $user->name = $request->input('name');
          $user->dis =$request->input('dis');
          $user->price =$request->input('price');
          
          
          
          

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
