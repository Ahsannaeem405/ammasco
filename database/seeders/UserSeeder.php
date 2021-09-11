<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            'email_verified_at'=>date('Y-m-d H:i:s'),
            'role'=>'1',
            'dashboard'=>'on',
            'add_product'=>'on',
            'edit_product'=>'on',
            'view_order'=>'on',
            'mail'=>'on',
            'approve_user'=>'on',
            'pending_user'=>'on',
            'manager'=>'on',
            
        ]);
    }
}
