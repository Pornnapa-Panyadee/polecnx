<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CratePoleLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pole_locations', function (Blueprint $table) {
            $table->id();
            $table->char('pole_id',5)->nullable();
            $table->text('pole_name',20)->nullable();
            $table->double('base_level')->nullable();
            $table->double('flood_level')->nullable();
            $table->double('flood_max')->nullable();
            $table->double('UTM_E')->nullable();
            $table->double('UTM_N')->nullable();
            $table->double('lat')->nullable();
            $table->text('pix')->nullable();
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
        //
    }
}
