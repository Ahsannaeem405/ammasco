<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;
use App\Models\qtylimt;
use App\Models\order;
use App\Models\order_detail;

use DB;

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
    public function user_list()
    {      
      $user =User::whereNull('email_verified_at')->where('role','3')->get();
      $user2 =User::whereNotNull('email_verified_at')->where('role','3')->get();
      $pro =product::all();
      return view('admin/user' ,compact('user','user2','pro'));

    }
    public function approve_user()
    {      
     
      $user2 =User::whereNotNull('email_verified_at')->where('role','3')->get();
      
      return view('admin/approve_user' ,compact('user2'));

    }
    
     public function  approve(Request $request)
     {

        
        for($i=0; $i<count($request->pro_id); $i++)
        {
          
            $cheat=new qtylimt();
            $cheat->pro_id=$request->pro_id[$i];
            $cheat->mon_limit=$request->mon_limit[$i];
            $cheat->user_id=$request->user_id;
            $cheat->save();   
        }
          $user=User::find($request->user_id);
          $user->email_verified_at =date('Y-m-d H:i:s');
          $user->update();
          if(!is_null($user)) {
            return back()->with('success', 'User Successfully Approved');
          }
          else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
              }

     }
     public function  update_limit(Request $request)
     {

        
        for($i=0; $i<count($request->id); $i++)
        {
            DB::table('qtylimts')
            ->where('id',$request->id[$i])
            ->where('user_id',$request->user_id)
            ->update([
                    'mon_limit' => $request->mon_limit[$i]
                    ]);
            
              
        }
          
            return back()->with('success', 'Limit Successfully Updated');
          

     }
    public function  order()
     {
        $user =order::all();
        return view('admin/order' ,compact('user'));
     }
     public function  order_dt($id)
     {
        $user =order_detail::where('order_id' ,$id)->get();
        return view('admin/order_dt' ,compact('user'));
     }
     
     



    
    
     
}
