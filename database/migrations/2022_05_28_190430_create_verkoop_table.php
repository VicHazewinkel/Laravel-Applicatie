<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verkoop', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            
            // werkt ook via een join van 'user_id' met 'user_name'
            // moet via model structuur in 'verkoop' model

            // werkt niet maar wou naam wergeven in 'overview' tabel 
            // $table->unsignedBigInteger('name')->unsigned();
            // $table->foreign('name')->references('name')->on('users');


            $table->unsignedBigInteger('item_id')->unsigned();
            $table->foreign('item_id')->references('id')->on('items');

            // $table->unsignedBigInteger('name')->unsigned();
            // $table->foreign('name')->references('name')->on('items');

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
        Schema::dropIfExists('verkoop');
    }
};
