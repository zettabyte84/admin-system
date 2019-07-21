<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('list_name',80);
            $table->string('address');
            $table->decimal('latitude',10,8);
            $table->decimal('longitude',10,8);
            $table->integer('submitter_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('listing', function($table) {
            $table->foreign('submitter_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listing');
    }
}
