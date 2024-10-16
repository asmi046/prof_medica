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
        Schema::create('product_rentals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('sku')->unique()->comment('Артикул');
            $table->string('title')->comment('Название товара');;
            $table->string('slug')->comment('Слаг');

            $table->string('img')->nullable()->comment('Заглавное изображение');
            $table->text('description')->nullable()->comment('Описание');
            $table->text('short_description')->nullable()->comment('Краткое Описание');

            $table->double('base_price', 10, 2)->default(0);
            $table->double('zalog', 10, 2)->default(0);

            $table->json('sales')->nullable();
            $table->json('galery')->nullable();

            $table->integer('viev_count')->nullable()->default(0);

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_rentals');
    }
};
