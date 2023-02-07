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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->enum('opsi', ['baru', 'pengembangan']);
            $table->string('project')->nullable();
            $table->string('nama_project')->unique();
            $table->enum('jenis', ['sim', 'perizinan']);
            $table->text('deskripsi');
            $table->string('pengaju');
            $table->date('target');
            $table->date('mulai');
            $table->date('selesai')->nullable();
            $table->string('penginput');
            $table->enum('status', ['verifikasi', 'on going', 'finish']);
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
};
