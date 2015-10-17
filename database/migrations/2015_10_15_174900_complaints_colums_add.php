<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB as DB;

class ComplaintsColumsAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('complaints', function($table)
        {
            $table->timestamp('created_at')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('phoneno');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
