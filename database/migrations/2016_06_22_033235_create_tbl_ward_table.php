<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblWardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tbl_ward', function($table)
            {
                    $table->increments('id');
                     $table->integer('id_district');
                    $table->string('ward_name');
                    $table->string('ward_type');
                    $table->string('lat_lng');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::drop('tbl_ward');    
    }
}
