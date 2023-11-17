<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('nama_article');
            $table->string('deskripsi_article');
            $table->text('isi_article');
            $table->date('tanggal_posting');
            $table->string('dafpus_article');
            $table->string('kategori_article');
            $table->string('gambar_article');
            $table->string('url_article');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article');
    }
};
