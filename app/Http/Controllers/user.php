<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\add_to_cart;
use App\Models\order;
use App\Models\order_detail;
use App\Models\qtylimt;
use Carbon\Carbon;

use Illuminate\Support\Facades\auth;
use DB;

class user extends Controller
{
     public function  product_dt($id)
    {      
        $user =product::find($id);
        return view('user/product_dt' ,compact('user'));

    }
     public function  add_to_cart(Request $request)
    {      
        
        
        $startDate = Carbon::now(); //returns current day
        $firstDay = $startDate->firstOfMonth()->toDateString();
        $lastDay = $startDate->lastOfMonth()->toDateString();

        $limt=qtylimt::where('user_id',Auth::user()->id)->where('pro_id',$request->input('pro_id'))->value('mon_limit'); 

        $check=order_detail::where('user_id',Auth::user()->id)->where('pro_id', $request->input('pro_id'))->whereDate('created_at','>=',$firstDay)->whereDate('created_at','<=',$lastDay)->sum('qty');
       
        if( intval($limt) >= intval($check))

        {
	        if(add_to_cart::where('pro_id', '=', $request->input('pro_id'))->where('user_id',Auth::user()->id)->exists()) 
	        {
	        	$ids=add_to_cart::where('pro_id', '=', $request->input('pro_id'))->where('user_id',Auth::user()->id)->value('id');
	            $type=add_to_cart::find($ids);
	            $type->qty=floatval($type->qty)+$request->input('qty');
                $sum=intval($type->qty) + intval($check);

	             if( intval($limt) >= intval($sum))
	            {
	            $type->update();
	            }
	            else{
	            	return back()->with('success', 'Your monthly limit exceed for');
	            }
	        }
	        else
	        {

             	if( intval($limt) >= intval($request->input('qty')))
	            {	    
			        $user =new add_to_cart;
			        $user->user_id =Auth::user()->id;
			        $user->pro_id =$request->input('pro_id');
			        $user->qty =$request->input('qty');
			        $sum=intval($user->qty) + intval($check);
	                if( intval($limt) >= intval($sum)  )
		            {
		             $user->save();
		            }
		            else{
		            	return back()->with('success', 'Your monthly limit exceed for');
		            }
			       
			    }    

			    else{
				    	return back()->with('success', 'Your monthly limit exceed ffor this product');

				    	
				    }     
	        }
	    }
	    else{
	    	return back()->with('success', 'Your monthly limit exceed ffor this product');

	    	
	    }      
        return back()->with('success', 'Product successfully add into cart.');
          

    }
    public function  add_too_cart($id)
    {      
    

        $startDate = Carbon::now(); //returns current day
        $firstDay = $startDate->firstOfMonth()->toDateString();
        $lastDay = $startDate->lastOfMonth()->toDateString();

        $limt=qtylimt::where('user_id',Auth::user()->id)->where('pro_id',$id)->value('mon_limit'); 

        $check=order_detail::where('user_id',Auth::user()->id)->where('pro_id', $id)->whereDate('created_at','>=',$firstDay)->whereDate('created_at','<=',$lastDay)->sum('qty');
       
        if( intval($limt) >= intval($check))

        {    
        
	        if(add_to_cart::where('pro_id', '=', $id)->where('user_id',Auth::user()->id)->exists()) 
	        {
	        	$ids=add_to_cart::where('pro_id', '=', $id)->where('user_id',Auth::user()->id)->value('id');
	            $type=add_to_cart::find($ids);
	            $type->qty=floatval($type->qty)+1;
	            $sum=intval($type->qty) + intval($check);
	            if( intval($limt) >= intval($sum)  )
	            {
	            $type->update();
	            }
	            else{
	            	return back()->with('success', 'Your monthly limit exceed for');
	            }
	        }
	        else
	        {

	          	
		          $user =new add_to_cart;
		          $user->user_id =Auth::user()->id;
		          $user->pro_id =$id;
		          $user->qty =1;
		          $sum=intval($user->qty) + intval($check);
	               if( intval($limt) >= intval($sum)  )
		            {
		            $user->save();
		            }
		            else{
		            	return back()->with('success', 'Your monthly limit exceed for');
		            }
	        }
	    }
	    else{
	    	return back()->with('success', 'Your monthly limit exceed ffor this product');

	    }      
        return back()->with('success', 'Product successfully add into cart.');
          

    }
       
    
     public function  cart()
    {  
           

        $user =add_to_cart::where('user_id',Auth::user()->id)->get();    
       
        return view('user/cart' , compact('user'));

    } 
     public function  check_out()
    {  
            
        $user =add_to_cart::where('user_id',Auth::user()->id)->get();    
       
        return view('user/check_out' , compact('user'));

    }
    public function  del_cat($id)
    {  
        $user =add_to_cart::find($id)->delete();    
       return back()->with('success', 'Product successfully remove from cart.');

        
    }   
     public function  cart_update(Request $request)
     {

        $arr=array();
        $arr1=array();
        for($i=0; $i<count($request->id); $i++)
        {
        	$y=add_to_cart::where('id',$request->id[$i])->get();

        	$startDate = Carbon::now(); //returns current day
	        $firstDay = $startDate->firstOfMonth()->toDateString();
	        $lastDay = $startDate->lastOfMonth()->toDateString();

	        $limt=qtylimt::where('user_id',Auth::user()->id)->where('pro_id',$y[0]->pro_id)->value('mon_limit'); 

	        $check=order_detail::where('user_id',Auth::user()->id)->where('pro_id', $y[0]->pro_id)->whereDate('created_at','>=',$firstDay)->whereDate('created_at','<=',$lastDay)->sum('qty');

                $sum=intval($request->qty[$i]) + intval($check);
	            if( intval($limt) >= intval($sum)  )
	            {
		            DB::table('add_to_carts')
		            ->where('id',$request->id[$i])
		            ->update([
		                    'qty' => $request->qty[$i]
		                    ]);
		            $arr1[]=[
                                           
                            'prod'=>$y[0]->pro->name.' update successfully',
                                                            
                            ];
		        } 
		        else
		        {
		        	$arr[]=[
                                           
                            'product'=>$y[0]->pro->name.' limit exceed',
                                                            
                            ];
		        	
		        }

		        

		        


              
        }
        
		    
        $user =add_to_cart::where('user_id',Auth::user()->id)->get();    
       
        return view('user/cart' , compact('user','arr','arr1'));
          

     }
      
   public function  place_order($id)
   {
   	        $user =add_to_cart::where('user_id',Auth::user()->id)->get(); 
   	        $order=new order();
            $order->user_id=Auth::user()->id;
            $order->total=$id;
            $order->save();

             $ref=order::find($order->id);
             $ref->refrecnce_no='Order no 000'.$order->id;
             $ref->update();


              return back()->with('success', 'Order Placed');






   	    for($i=0; $i<count($user); $i++)
        {
          
            $cheat=new order_detail();
            $cheat->order_id=$order->id;
            $cheat->pro_id=$user[$i]->pro_id;
            $cheat->qty=$user[$i]->qty;
            $cheat->price=$user[$i]->pro->price;
            $cheat->user_id=Auth::user()->id;
            $cheat->save();

            add_to_cart::find($user[$i]->id)->delete();


        }

   }
   public function  order()
     {
        $user =order::where('user_id',Auth::user()->id)->get();
        return view('user/order' ,compact('user'));
     }
     public function  order_dt($id)
     {
        $user =order_detail::where('order_id' ,$id)->get();
        return view('user/order_dt' ,compact('user'));
     }
    
}
