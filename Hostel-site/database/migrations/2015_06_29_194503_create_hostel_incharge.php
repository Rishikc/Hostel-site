<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostelIncharge extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel-incharge', function(Blueprint $table)
        {
            $table->string('id',100)->unique()->primary();
            $table->string('name',40);
            $table->string('hostel_id',100)->foreign();
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
        Schema::drop('hostel-incharge');
    }
}
