<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTamuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',30);
            $table->string('email',50);
            $table->text('alamat');
            $table->string('telp',16);
            $table->tinyInteger('kuota');
            $table->tinyInteger('kehadiran');
            $table->tinyInteger('verfikasi_Email',0)->default('0')->unsigned();
            $table->tinyInteger('verfikasi_Admin',0)->default('0')->unsigned();
            $table->tinyInteger('verfikasi_Kehadiran',0)->default('0')->unsigned();
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
        Schema::dropIfExists('tamu');
    }
}
