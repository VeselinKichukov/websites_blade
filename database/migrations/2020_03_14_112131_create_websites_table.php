<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->string('name');
            $table->string('url')->unique();
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('websites');
    }
}
