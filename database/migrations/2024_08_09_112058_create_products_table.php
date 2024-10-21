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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sku')->unique()->comment('Артикул');
            $table->string('title')->comment('Название товара');;
            $table->string('slug')->comment('Слаг');

            $table->string('img')->nullable()->comment('Заглавное изображение');
            $table->text('description')->nullable()->comment('Описание');
            $table->text('short_description')->nullable()->comment('Краткое Описание');

            $table->double('price', 10, 2)->default(0);
            $table->double('old_price', 10, 2)->default(0);

            $table->integer('viev_count')->nullable()->default(0);

            $table->boolean("hit")->nullable();
            $table->boolean("new")->nullable();

            // $table->json('galery')->default(json_encode([]));
            $table->json('galery')->nullable();

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
        });

        Schema::create('category_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_product');
        Schema::dropIfExists('products');
    }
};
