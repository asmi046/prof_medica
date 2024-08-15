<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "0001" => "Реабилитационный тренажёр «Восстановитель»",
            "0002" => "Тренажёр для разработки суставов «Орто-Мастер»",
            "0003" => "Кресло-коляска повышенной комфортности «Свобода движения»",
            "0004" => "Вертикализатор «Опора»",
            "0005" => "Ортопедическая обувь «Лёгкая поступь»",
            "0006" => "Корректор осанки «Здоровье спины»",
            "0007" => "Электроприводное кресло-коляска «Актив»",
            "0008" => "Трость с регулировкой высоты и подлокотником «Уверенный шаг»",
            "0009" => "Противопролежневый матрас «Комфорт»",
            "0010" => "Ролятор с сиденьем и корзиной «Шагаем вместе»",
            "0011" => "Реабилитационный тренажёр «Восстановитель» - 2",
            "0012" => "Тренажёр для разработки суставов «Орто-Мастер» - 2",
            "0013" => "Кресло-коляска повышенной комфортности «Свобода движения» - 2",
            "0014" => "Вертикализатор «Опора» - 2",
            "0015" => "Ортопедическая обувь «Лёгкая поступь» - 2",
            "0016" => "Корректор осанки «Здоровье спины» - 2",
            "0017" => "Электроприводное кресло-коляска «Актив» - 2",
            "0018" => "Трость с регулировкой высоты и подлокотником «Уверенный шаг» - 2",
            "0019" => "Противопролежневый матрас «Комфорт» - 2",
            "0020" => "Ролятор с сиденьем и корзиной «Шагаем вместе» - 2",
        ];

        Storage::disk('public')->put("product/1.jpg", file_get_contents(public_path('base//product//img//1.jpg')), 'public');
        Storage::disk('public')->put("product/2.jpg", file_get_contents(public_path('base//product//img//2.jpg')), 'public');
        Storage::disk('public')->put("product/3.jpg", file_get_contents(public_path('base//product//img//3.jpg')), 'public');
        Storage::disk('public')->put("product/4.jpg", file_get_contents(public_path('base//product//img//4.jpg')), 'public');
        Storage::disk('public')->put("product/5.jpg", file_get_contents(public_path('base//product//img//5.jpg')), 'public');
        Storage::disk('public')->put("product/6.jpg", file_get_contents(public_path('base//product//img//6.jpg')), 'public');

        foreach ($data as $key => $item) {
            DB::table("products")->insert([
                "sku" => $key,
                "title" => $item,
                "slug" => Str::slug($item),
                "img" => "product/".rand(1,6).".jpg",
                "price" => rand(1000, 9000),
                "description"=> "Реабилитационный тренажёр «Восстановитель» предназначен для восстановления двигательных функций после травм и операций. Он помогает укрепить мышцы, улучшить координацию движений и повысить общую физическую выносливость. Тренажёр может использоваться как в медицинских учреждениях, так и дома. Регулярные занятия на тренажёре способствуют более быстрому восстановлению после травм или операций, а также могут быть полезны для профилактики заболеваний опорно-двигательного аппарата.",
                "short_description" => "Реабилитационный тренажёр «Восстановитель» предназначен для восстановления двигательных функций после травм и операций. Он помогает укрепить мышцы, улучшить координацию движений и повысить общую физическую выносливость.",
                "viev_count" => rand(50, 100),
                "hit" => false,
                "new" => false,
                "seo_title" => $item,
                "seo_description"=>$item,
            ]);
        }
    }
}
