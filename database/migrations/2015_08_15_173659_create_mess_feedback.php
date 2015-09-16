<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessFeedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('mess_feedback', function(Blueprint $table)
        {
            $table->increments('id',100);
            $table->string('mess_id',100)->foreign();
            $table->float('quality');
            $table->float('quantity');
            $table->float('punctuality');
            $table->float('cleanliness');
            $table->float('overall');
            $table->integer('number_of_feebacks')->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mess_feedback');
    }
}
