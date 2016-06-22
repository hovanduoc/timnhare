<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tbl_user', function($table)
            {
                    $table->increments('id');
                    $table->string('email');
                    $table->string('password');
                    $table->integer('gender');
                    $table->string('full_name');
                    $table->string('provider');
                    $table->string('provider_id');
                    $table->string('phone_number');
                    $table->string('address');
                    $table->string('birthday');
                    $table->integer('role_id');
                    $table->string('avatar');
                    $table->string('cover_timeline');
                    $table->string('gcm_id');
                    $table->text('activation');
                    $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::drop('tbl_user');    
    }
}
