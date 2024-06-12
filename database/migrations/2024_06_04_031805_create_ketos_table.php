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
        Schema::create('ketos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->text('visi');
            $table->text('misi');
            $table->integer('no');
            $table->tinyInteger('vote')->default(0);
            $table->string('slogan');
            $table->string('kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketos');
    }
};
