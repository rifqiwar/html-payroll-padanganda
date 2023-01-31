<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGolongan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('golongan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_golongan');
            $table->double('gaji_pokok');
            $table->double('tunjangan_istri');
            $table->double('tunjangan_anak');
            $table->double('tunjangan_transport');
            $table->double('tunjangan_makan');
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
        Schema::dropIfExists('golongan');
    }
}
