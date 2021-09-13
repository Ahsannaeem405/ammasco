<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;
use App\Models\qtylimt;
use App\Models\order;
use App\Models\order_detail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendmail;
use App\Mail\sendmail2;


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
          if (qtylimt::where('id', '=', $request->id[$i])->exists()) 
          {
            DB::table('qtylimts')
            ->where('id',$request->id[$i])
            ->where('user_id',$request->user_id)
            ->update([
                    'mon_limit' => $request->mon_limit[$i]
                    ]);

          }
          else{

            $cheat=new qtylimt();
            $cheat->pro_id=$request->p_id[$i];
            $cheat->mon_limit=$request->mon_limit[$i];
            $cheat->user_id=$request->user_id;
            $cheat->save();





          }

            
            
              
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
        $status=order::where('id',$id)->value('status');
        //dd($status);
        return view('admin/order_dt' ,compact('user','status'));
     }
      public function  add_manager()
     {
        return view('admin/add_manager');
     }

    public function  register_manager(Request $request)
    {
            $request->validate([
                'f_name'        =>      'required',
                'l_name'         =>      'required',
                'email'         =>      'required',
                'password'         =>      'required',
               
            ]);

          
          $user =new User;
          $user->name = $request->input('f_name').$request->input('l_name');
          $user->email =$request->input('email');
          $user->password =Hash::make($request->input('password'));
          $user->email_verified_at=date('Y-m-d H:i:s');
          $user->role =1;
          $user->dashboard =$request->input('dashboard');
          $user->add_product =$request->input('add_product');
          $user->edit_product =$request->input('edit_product');
          $user->view_order =$request->input('view_order');
          $user->mail =$request->input('mail');
          $user->approve_user =$request->input('approve_user');
          $user->pending_user =$request->input('pending_user');
          $user->save();
          if(!is_null($user)) {
            return back()->with('success', 'Product Successfully Add.');
          }
          else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
              }




     }


     public function send_mail($id)
    {
       
       $user =order_detail::where('order_id' ,$id)->get();
       $data=array();
       $sum=0;
       for($i=0; $i<count($user); $i++)
        
        {

          
          

          $data[]= array(
            'user_name'=>$user[$i]->user->name,
            'name'=>$user[$i]->pro->name,
            'qty'=>$user[$i]->qty,
            'qty_tot'=>$user[$i]->pro->price
          );


                                   
        } 

        
        
       Mail::to('anaqvi527@gmail.com')->send(new sendmail($data));

       Mail::to($user[0]->user->email)->send(new sendmail2($data));
       $or=order::find($id);
       $or->status=1;
       $or->update();

       return back()->with('success', 'Your Successfully Subscribe it');
    }
    public function manager()
    {      
     
      $user2 =User::where('id','!=',1)->where('role','1')->get();
      
      return view('admin/manager' ,compact('user2'));

    }
    public function edit_manager($id)
    {      
     
      $user2 =User::find($id);
      return view('admin/edit_manager' ,compact('user2'));

    }
    public function  update_manager(Request $request,$id)
    {
          
          $user =User::find($id);
          $user->name = $request->input('f_name');
          $user->email =$request->input('email');
          $user->dashboard =$request->input('dashboard');
          $user->add_product =$request->input('add_product');
          $user->edit_product =$request->input('edit_product');
          $user->view_order =$request->input('view_order');
          $user->mail =$request->input('mail');
          $user->approve_user =$request->input('approve_user');
          $user->pending_user =$request->input('pending_user');
          $user->update();
          if(!is_null($user)) {
            return back()->with('success', 'Product Successfully Add.');
          }
          else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
              }




     }
    
  
     
   
     
     



    
    
     
}
