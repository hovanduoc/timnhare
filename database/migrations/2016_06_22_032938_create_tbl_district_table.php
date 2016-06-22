<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('tbl_district', function($table)
            {
                    $table->increments('id');
                    $table->integer('province_id');
                    $table->string('district_name');
                    $table->string('district_type');
                    $table->string('lat_lng');
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
                Schema::drop('tbl_district');
    }
}
