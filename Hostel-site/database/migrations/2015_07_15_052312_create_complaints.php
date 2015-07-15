<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function(Blueprint $table)
        {
            $table->increments('id',100);
            $table->string('building',40);
            $table->string('hostel',40);
            $table->string('subject',40);
            $table->string('description',500);
            $table->string('created_name',40);
            $table->string('created_rollnumber',40);
//            $table->timestamp('created_at',100);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('complaints');
    }
}
