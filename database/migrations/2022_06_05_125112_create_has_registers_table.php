<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('has_registers', function (Blueprint $table) {
            $table->unsignedBigInteger('id_event');
            $table->unsignedBigInteger('id_user');
            $table->primary(["id_event", "id_user"]);

            $table->foreign("id_event")->references("id")->on("events")->onDelete('cascade');
            $table->foreign("id_user")->references("id")->on("users")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('has_registers');
    }
}
