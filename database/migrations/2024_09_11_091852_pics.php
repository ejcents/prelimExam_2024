<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pics', function(Blueprint $table){
            $table->id();
            $table->pic_name('pic_name');
            $table->date_taken('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('pics');
    }
};
