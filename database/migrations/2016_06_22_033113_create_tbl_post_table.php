<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tbl_post', function($table)
            {
                    $table->increments('id');
                    $table->integer('user_id');
                    $table->string('title');
                    $table->text('content');
                    $table->text('image');
                    $table->string('address');
                    $table->decimal('price');
                    $table->decimal('area');
                    $table->string('latitue');
                    $table->string('longitude');
                    $table->integer('room_type_id');
                    $table->integer('province_id');
                    $table->integer('district_id');
                    $table->integer('ward_id');
                    $table->integer('gender_type_id');
                    $table->string('url');
                    $table->dateTime('exp_at');
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
            Schema::drop('tbl_post');
    }
}
