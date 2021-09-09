<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPermissionUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->text('dashboard')->nullable();
            $table->text('add_product')->nullable();
            $table->text('edit_product')->nullable();
            $table->text('view_order')->nullable();
            $table->text('mail')->nullable();
            $table->text('approve_user')->nullable();
            $table->text('pending_user')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
