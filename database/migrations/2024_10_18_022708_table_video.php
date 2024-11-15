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
<<<<<<< HEAD
            $table->String('judul',50);
            $table->text('deskripsi');
            $table->String('link_toko',800);
            $table->dateTime('hari_upload');
            $table->double('suka',100,2);
            $table->double('jumlah_penonton',100,2);
            $table->timestamps();
=======
            $table->unsignedBigInteger('user_id');
            $table->string('judul', 50);
            $table->text('thumbnail');
            $table->text('path');
            $table->text('deskripsi')->nullable();
            $table->text('link_toko');
            // Kolom deleted_at untuk soft delete
            $table->softDeletes();
            $table->timestamps();

            // Tambahkan foreign key constraint untuk user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
>>>>>>> 0e9cd92 (first commit)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
=======
        Schema::table('table_video', function (Blueprint $table) {
            // Hapus foreign key constraint sebelum drop tabel
            $table->dropForeign(['user_id']);
        });

>>>>>>> 0e9cd92 (first commit)
        Schema::dropIfExists('table_video');
    }
};
