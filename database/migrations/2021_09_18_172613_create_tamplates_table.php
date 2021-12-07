<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamplates', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail')->nullable(true);
            $table->string('url');
            $table->string('name_tamplate');
            $table->string('description_tamplate');
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
        Schema::dropIfExists('tamplates');
    }
}
