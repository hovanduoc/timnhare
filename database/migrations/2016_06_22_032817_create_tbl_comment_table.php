<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('tbl_comment', function($table)
            {
                    $table->increments('id');
                    $table->text('comment');
                    $table->integer('post_id');
                    $table->integer('user_id');
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
            Schema::drop('tbl_comment');
    }
}
