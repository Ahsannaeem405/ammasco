<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\add_to_cart;
use Illuminate\Support\Facades\auth;


class user extends Controller
{
     public function  product_dt($id)
    {      
        $user =product::find($id);
        return view('user/product_dt' ,compact('user'));

    }
     public function  add_to_cart(Request $request)
    {      
        
        if(add_to_cart::where('pro_id', '=', $request->input('pro_id'))->where('user_id',Auth::user()->id)->exists()) 
        {
        	$ids=add_to_cart::where('pro_id', '=', $request->input('pro_id'))->where('user_id',Auth::user()->id)->value('id');
            $type=add_to_cart::find($ids);
            $type->qty=floatval($type->qty)+$request->input('qty');
            $type->update();
        }
        else
        {

    
          $user =new add_to_cart;
          $user->user_id =Auth::user()->id;
          $user->pro_id =$request->input('pro_id');
          $user->qty =$request->input('qty');
          $user->save();
        }  
        return back()->with('success', 'Product successfully add into cart.');
          

    }
    public function  add_too_cart($id)
    {      
        
        if(add_to_cart::where('pro_id', '=', $id)->where('user_id',Auth::user()->id)->exists()) 
        {
        	$ids=add_to_cart::where('pro_id', '=', $id)->where('user_id',Auth::user()->id)->value('id');
            $type=add_to_cart::find($ids);
            $type->qty=floatval($type->qty)+1;
            $type->update();
        }
        else
        {

    
          $user =new add_to_cart;
          $user->user_id =Auth::user()->id;
          $user->pro_id =$id;
          $user->qty =1;
          $user->save();
        }  
        return back()->with('success', 'Product successfully add into cart.');
          

    }
       
    
     public function  cart()
    {  
        $user =add_to_cart::where('user_id',Auth::user()->id)->get();    
       
        return view('user/cart' , compact('user'));

    } 
    public function  del_cat($id)
    {  
        $user =add_to_cart::find($id)->delete();    
       
        return back()->with('success', 'Product successfully remove from cart.');

    }   
    
}
