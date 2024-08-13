<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductRentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("product_rental/1.jpg", file_get_contents(public_path('base//product//img//1.jpg')), 'public');

        $data = [
            "0001" => [ 'title' => "Кислородный концентратор 5л", 'base_price' => 400,  'zalog' => 7000],
            "0002" => [ 'title' => "Кислородный концентратор 3л", 'base_price' => 300,  'zalog' => 5000],
            "0003" => [ 'title' => "Коляска инвалидная", 'base_price' => 400,  'zalog' => 5000 ],
            "0004" => [ 'title' => "Кровать для лежачих больных", 'base_price' => 300,  'zalog' => 5000 ],
            "0005" => [ 'title' => "Кровать для лежачих больных 2х-секционная", 'base_price' => 230,  'zalog' => 4000],
            "0006" => [ 'title' => "Костыли", 'base_price' => 18,  'zalog' => 1000 ],
            "0007" => [ 'title' => "Элфор проф", 'base_price' => 20,  'zalog' => 3500 ],
            "0008" => [ 'title' => "Пульсоксиметр", 'base_price' => 50,  'zalog' => 1000 ],
            "0009" => [ 'title' => "Ходунки", 'base_price' => 30,  'zalog' => 2000 ],
            "0010" => [ 'title' => "Рециркулятор на 150 куб.м", 'base_price' => 120,  'zalog' => 4000 ],
            "0011" => [ 'title' => "Аламаг плюс", 'base_price' => 180,  'zalog' => 4500 ],
            "0012" => [ 'title' => "Весы для новорожденных", 'base_price' => 70,  'zalog' => 4500 ],
            "0013" => [ 'title' => "Пылесос для хим.чистки Kerchar", 'base_price' => 900,  'zalog' => 7500 ],
            "0014" => [ 'title' => "Пароочиститель", 'base_price' => 500,  'zalog' => 7500 ],
            "0015" => [ 'title' => "Пылесос моющий + пароочиститель", 'base_price' => 1400,  'zalog' => 7500 ],
            "0016" => [ 'title' => "Строительный пылесос", 'base_price' => 500,  'zalog' => 7500 ],
            "0017" => [ 'title' => "Строительный пылесос + моющий пылесос", 'base_price' => 1400,  'zalog' => 7500 ],
            "0018" => [ 'title' => "Строительный пылесос + моющий пылесос + пароочиститель", 'base_price' => 1700, 'zalog' => 7500 ],
            "0019" => [ 'title' => "Строительный пылесос + пароочиститель", 'base_price' => 900, 'zalog' => 7500 ],
        ];

        $sales = [
            [ 'day' => 1, 'sale' => 0 ],
            [ 'day' => 2, 'sale' => 0 ],
            [ 'day' => 3, 'sale' => 0 ],

            [ 'day' => 4, 'sale' => 10 ],
            [ 'day' => 5, 'sale' => 10 ],
            [ 'day' => 6, 'sale' => 10 ],

            [ 'day' => 7, 'sale' => 20 ],
            [ 'day' => 8, 'sale' => 20 ],
            [ 'day' => 9, 'sale' => 20 ],

            [ 'day' => 10, 'sale' => 30 ],
            [ 'day' => 11, 'sale' => 30 ],
            [ 'day' => 12, 'sale' => 30 ],

            [ 'day' => 13, 'sale' => 40 ],
            [ 'day' => 14, 'sale' => 40 ],
            [ 'day' => 15, 'sale' => 40 ],

            [ 'day' => 16, 'sale' => 50 ],
            [ 'day' => 17, 'sale' => 50 ],
            [ 'day' => 18, 'sale' => 50 ],

            [ 'day' => 19, 'sale' => 60 ],
            [ 'day' => 20, 'sale' => 60 ],
            [ 'day' => 21, 'sale' => 60 ],

            [ 'day' => 22, 'sale' => 70 ],
            [ 'day' => 23, 'sale' => 70 ],
            [ 'day' => 24, 'sale' => 70 ],

            [ 'day' => 25, 'sale' => 70 ],
            [ 'day' => 26, 'sale' => 70 ],
            [ 'day' => 27, 'sale' => 70 ],

            [ 'day' => 28, 'sale' => 70 ],
            [ 'day' => 29, 'sale' => 70 ],
            [ 'day' => 30, 'sale' => 70 ],

        ];

        foreach ($data as $key => $item) {
            DB::table("product_rentals")->insert([
                "sku" => $key,
                "title" => $item['title'],
                "slug" => Str::slug($item['title']),
                'img' => "product_rental/1.jpg",
                'description' => $item['title'],
                'short_description' => $item['title'],
                'base_price' => $item['base_price'],
                'sales' => json_encode( $sales ),
                'zalog' => $item['zalog'],
                'viev_count' => 1,
                'seo_title' => $item['title'] . " - взять в аренду в Курске",
                'seo_description' => $item['title'] . " - взять в аренду в Курске",
            ]);
        }
    }
}
