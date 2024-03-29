string<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsuls', function (Blueprint $table) {
            $table->id();
            $table->string('id_konsul');
            $table->string('no_ktp');
            $table->string('no_antrian');
            $table->string('catatan_konsul');
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
        Schema::dropIfExists('konsuls');
    }
}
