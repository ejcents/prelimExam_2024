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
        Schema::create('items', function(Blueprint $table){
            $table->id();
            $table->item_name('item_name');
            $table->price('price', 10, 3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('items');
    }
};
