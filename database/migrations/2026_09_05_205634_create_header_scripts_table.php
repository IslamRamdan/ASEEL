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
        Schema::create('header_scripts', function (Blueprint $table) {
            $table->id();
            $table->string('name');             // اسم السكريبت (مثال: TikTok Ads, Google Analytics)
            $table->longText('code');           // النص الكامل للسكريبت بالكامل (HTML / JavaScript)
            $table->boolean('is_active')->default(true); // تفعيل أو إيقاف السكريبت
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header_scripts');
    }
};
