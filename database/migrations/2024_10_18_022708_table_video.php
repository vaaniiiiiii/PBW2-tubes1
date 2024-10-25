<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_video', function (Blueprint $table) {
            $table->id();
            $table->String('judul',50);
            $table->text('deskripsi');
            $table->String('link_toko',800);
            $table->dateTime('hari_upload');
            $table->double('suka',100,2);
            $table->double('jumlah_penonton',100,2);
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
        Schema::dropIfExists('table_video');
    }
};
