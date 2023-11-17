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
        Schema::create('wiki', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wiki');
            $table->string('deskripsi_wiki');
            $table->text('isi_wiki');
            $table->date('tanggal_posting');
            $table->string('gambar_wiki');
            $table->string('url_wiki');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wiki');
    }
};
