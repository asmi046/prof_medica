<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("category/tsr.webp", file_get_contents(public_path('base//category//tsr.webp')), 'public');
        Storage::disk('public')->put("category/mt.webp", file_get_contents(public_path('base//category//mt.webp')), 'public');
        Storage::disk('public')->put("category/gpr.webp", file_get_contents(public_path('base//category//gpr.webp')), 'public');
        Storage::disk('public')->put("category/clo.webp", file_get_contents(public_path('base//category//clo.webp')), 'public');

        DB::table("categories")->insert([
            [
                "title" => "Технические средства реабилитации",
                "title_mini" => "Технические средства реабилитации",
                "title_comment" => "инвалидные коляски, костыли, ходунки, трости, приспособления для ванны и туалета, противопролежневые матрасы",
                "slug" => Str::slug("Технические средства реабилитации"),
                "description" => "Технические средства реабилитации (инвалидные коляски, костыли, ходунки, трости, приспособления для ванны и туалета, противопролежневые матрасы)",
                "img" => "category/tsr.webp",
                "seo_title" => "Технические средства реабилитации, купить в Курске",
                "seo_description" => "Технические средства реабилитации (инвалидные коляски, костыли, ходунки, трости, приспособления для ванны и туалета, противопролежневые матрасы)",
            ],

            [
                "title" => "Медицинская техника",
                "title_mini" => "Медицинская техника",
                "title_comment" => "тонометры, термометры, ингаляторы, пульсоксиметры, кислородные концентраторы",
                "slug" => Str::slug("Медицинская техника"),
                "description" => "Медицинская техника (тонометры, термометры, ингаляторы, пульсоксиметры, кислородные концентраторы)",
                "img" => "category/mt.webp",
                "seo_title" => "Медицинская техника, купить в Курске",
                "seo_description" => "Медицинская техника (тонометры, термометры, ингаляторы, пульсоксиметры, кислородные концентраторы)",
            ],
            [
                "title" => "Косметология и гигиена полости рта",
                "title_mini" => "Косметология и гигиена полости рта",
                "title_comment" => "ультразвуковые чистки лица, антивозрастные процедуры, ирригаторы",
                "slug" => Str::slug("Косметология и гигиена полости рта"),
                "description" => "Косметология и гигиена полости рта (ультразвуковые чистки лица, антивозрастные процедуры, ирригаторы)",
                "img" => "category/gpr.webp",
                "seo_title" => "Косметология и гигиена полости рта, купить оборудование в Курске",
                "seo_description" => "Косметология и гигиена полости рта (ультразвуковые чистки лица, антивозрастные процедуры, ирригаторы)",
            ],
            [
                "title" => "Микроклимат в помещении",
                "title_mini" => "Микроклимат в помещении",
                "title_comment" => "очистители воздуха, ионизаторы, бактерицидные облучатели, соляные лампы",
                "slug" => Str::slug("Микроклимат в помещении"),
                "description" => "Микроклимат в помещении (очистители воздуха, ионизаторы, бактерицидные облучатели, соляные лампы)",
                "img" => "category/clo.webp",
                "seo_title" => "Микроклимат в помещении, купить оборудование в Курске",
                "seo_description" => "Микроклимат в помещении (очистители воздуха, ионизаторы, бактерицидные облучатели, соляные лампы)",
            ],
        ]);
    }
}
