<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/cls', function() {
        $run = Artisan::call('config:clear');
        $run = Artisan::call('cache:clear');
        $run = Artisan::call('config:cache');
        Session::flush();
        return 'FINISHED';  
    });
Route::get('/migrate', function() {
    
        $run = Artisan::call('migrate:fresh --seed');
       
        return 'Complete';  
    });    

Auth::routes();

Route::get('/email/verify', function () {
    return view('auth.verify');
    });  

Route::get('/email/not_allow', function () {
    return view('auth.verify2');
    }); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::prefix('/admins')->middleware(['auth','admin','role'])->group(function (){

	Route::get('/', function () {
    return view('admin/welcome');
    });
        Route::get('/view_product', function () {
      
    return view('admin.view_product');
    });

    Route::get('/add_product', function () {
    return view('admin.add_product');
    });
    
    Route::post('/save_product', [App\Http\Controllers\admin::class, 'save_product']);
    Route::any('/product_dt/{id}', [App\Http\Controllers\admin::class, 'product_dt']);
    Route::any('/product_edit/{id}', [App\Http\Controllers\admin::class, 'product_edit']);
    Route::post('/product_update/{id}', [App\Http\Controllers\admin::class, 'product_update']);
    Route::any('/user', [App\Http\Controllers\admin::class, 'user_list']);
    Route::post('/approve', [App\Http\Controllers\admin::class, 'approve']);
    Route::any('/approve_user', [App\Http\Controllers\admin::class, 'approve_user']);
    Route::any('/update_limit', [App\Http\Controllers\admin::class, 'update_limit']);
    Route::any('/order', [App\Http\Controllers\admin::class, 'order']);
    Route::any('/order_dt/{id}', [App\Http\Controllers\admin::class, 'order_dt']);
    Route::any('/add_manager', [App\Http\Controllers\admin::class, 'add_manager']);
    Route::post('/register_manager', [App\Http\Controllers\admin::class, 'register_manager']);
    Route::any('/send_mail/{id}', [App\Http\Controllers\admin::class, 'send_mail']);
    Route::any('/manager', [App\Http\Controllers\admin::class, 'manager']);
    Route::any('/edit_manager/{id}', [App\Http\Controllers\admin::class, 'edit_manager']);
    Route::any('/update_manager/{id}', [App\Http\Controllers\admin::class, 'update_manager']);
    Route::any('/order_repoort', [App\Http\Controllers\admin::class, 'order_repoort']);



 
 


    

	

});	


Route::prefix('/user')->middleware(['auth','user'])->group(function (){
    Route::get('/', function () {
    return view('user.view_product');
    });
    Route::any('/product_dt/{id}', [App\Http\Controllers\user::class, 'product_dt']);
    Route::any('/add_to_cart', [App\Http\Controllers\user::class, 'add_to_cart']);
    Route::any('/add_too_cart/{id}', [App\Http\Controllers\user::class, 'add_too_cart']);
    
    Route::any('/cart', [App\Http\Controllers\user::class, 'cart']);
    Route::any('/cart2', [App\Http\Controllers\user::class, 'cart2']);

    Route::any('/del_cat/{id}', [App\Http\Controllers\user::class, 'del_cat']);
    Route::any('/cart_update', [App\Http\Controllers\user::class, 'cart_update']);
    Route::any('/check_out', [App\Http\Controllers\user::class, 'check_out']);
    Route::any('/place_order/{id}', [App\Http\Controllers\user::class, 'place_order']);
    Route::any('/order', [App\Http\Controllers\user::class, 'order']);
    Route::any('/order_dt/{id}', [App\Http\Controllers\user::class, 'order_dt']);
    
    
    

    

 });    
   