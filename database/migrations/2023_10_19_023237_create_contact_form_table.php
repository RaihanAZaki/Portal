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
        Schema::create('contact_form', function (Blueprint $table) {
            $table->id();
            $table->string('tanda_pengenal');
            $table->string('nama');
            $table->text('email');
            $table->enum('kategori', ['Saran', 'Pernyataan']);
            $table->text('pesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_form');
    }
};
