<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Masalan: "Центральный телеграф"
            $table->string('description')->nullable(); // Qisqa tavsif
            $table->string('image_class'); // bg-moscow kabi class (yoki URL agar rasm fayl bo'lsa)
            $table->string('link')->nullable(); // Contact yoki boshqa route
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};