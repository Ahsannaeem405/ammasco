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

Auth::routes(['verify' => true]);;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::prefix('/admins')->middleware(['auth','admin'])->group(function (){

	Route::get('/', function () {
    return view('welcome');
    });
    Route::get('/view_product', function () {
    return view('admin.view_product');
    });

    Route::get('/add_product', function () {
    return view('admin.add_product');
    });
    
    Route::post('/save_product', [App\Http\Controllers\admin::class, 'save_product']);
    

	

});	