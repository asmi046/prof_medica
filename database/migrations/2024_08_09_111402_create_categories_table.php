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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title")->comment("Название");
            $table->string("title_mini")->nullable()->comment("Сокращенное название");
            $table->string("title_comment")->nullable()->comment("Комментарий к заголовку");
            $table->string("slug")->comment("Слаг");
            $table->integer("parent")->nullable()->comment("Родительская категория (ID)");
            $table->text("description")->nullable()->comment("Описание");
            $table->string("img")->nullable()->comment("Изображение");
            $table->string('seo_title')->nullable()->comment("seo заголовок");
            $table->text('seo_description')->nullable()->comment("seo описание");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
