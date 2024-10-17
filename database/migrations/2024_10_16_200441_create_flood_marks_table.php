<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFloodMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flood_marks', function (Blueprint $table) {
            $table->id();
            $table->text('code')->nullable();
            $table->text('affected_area',20)->nullable();
            $table->text('place_detail')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->text('place_around')->nullable();
            $table->double('water_level')->nullable();
            $table->text('tool')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('flood_marks');
    }
}
