<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messes', function(Blueprint $table)
        {
            $table->increments('id',100);
            $table->string('url_name',40);
            $table->string('name',40);
            $table->string('description',500);
            $table->string('tags',100);
            $table->string('image_url',100);
//            $table->timestamp('updated_at',100);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messes');
    }
    
}
