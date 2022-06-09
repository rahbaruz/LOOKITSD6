<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('has_images', function (Blueprint $table) {
            $table->unsignedBigInteger('id_event');
            $table->unsignedBigInteger('id_image');
            $table->primary(["id_event", "id_image"]);

            $table->foreign("id_event")->references("id")->on("events")->onDelete('cascade');
            $table->foreign("id_image")->references("id")->on("images")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('has_images');
    }
}
