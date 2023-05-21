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
        Schema::create('resep_bahans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('resep_id')->unsigned();
            $table->char('bahan_id', 4);
            $table->bigInteger('jumlah');
            $table->string('satuan');
            $table->foreign('bahan_id')->references('id')->on('bahans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resep_bahans');
    }
};
