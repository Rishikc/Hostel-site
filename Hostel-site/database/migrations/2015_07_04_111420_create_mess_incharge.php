<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessIncharge extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        
        Schema::create('mess_incharge', function(Blueprint $table)
        {
            $table->increments('id',100);
            $table->string('name',40);
            $table->string('mess_id',100)->foreign();
            $table->string('position',100);
            $table->string('mail',100);
            $table->string('image_url',100);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mess_incharge');
    }
}
