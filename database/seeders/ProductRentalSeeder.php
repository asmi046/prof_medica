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
            "0001" => [ 'title' => "Кислородный концентратор 5л", 'base_price' => 400,  'zalog' => 7000, 'cat' => "Концентратор кислорода Армед 7F-8L", 'galery' => [
                "Концентратор кислорода Армед 7F-8L 2.jpeg",
                "Концентратор кислорода Армед 7F-8L.jpg",
                "Концентратор кислорода Армед 7F-8L 1.jpeg",
                "Концентратор кислорода Армед 7F-8L 3.jpeg",

            ]],
            "0002" => [ 'title' => "Кислородный концентратор 3л", 'base_price' => 300,  'zalog' => 5000, 'cat' => "Кислородный концетратор Армед 7F-3L", 'galery' => [
                "61a76fe31321c.jpg",
                "Кислородный конц 7.jpg",
                "Кислородный концетратор Армед 7F-3L 1.jpg",
                "Кислородный концетратор Армед 7F-3L 2.webp",
                "Кислородный концетратор Армед 7F-3L 3.jpg",
                "Кислородный концетратор Армед 7F-3L 4.jpg",
                "Кислородный концетратор Армед 7F-3L 5.jpg",
                "Кислородный концетратор Армед 7F-3L 6.jpg",
                "Кислородный концетратор Армед 7F-3L 7.jpg",
                "Кислородный концетратор Армед 7F-3L 8.jpg",
                "Кислородный концетратор Армед 7F-3L 9.jpg",
                "Кислородный концетратор Армед 7F-3L 10.jpg",
                "Кислородный концетратор Армед 7F-3L.jpg",
            ]],
            "0011" => [ 'title' => "Аппарат АЛМАГ Плюс Еламед", 'base_price' => 180,  'zalog' => 4500, 'cat' => "Аппарат АЛМАГ Плюс Еламед", "galery" => [
                "Аппарат АЛМАГ Плюс Еламед -2.jpg",
                "Аппарат АЛМАГ Плюс Еламед - 3.jpg",
                "Аппарат АЛМАГ Плюс Еламед  -1.jpg",
                "new-almag-plus.jpg",
                "almag-plus (4).jpg",
                "almag-plus (1).jpg",
                "Аппарат АЛМАГ Плюс Еламед.jpg",
            ]],

            "1011" => [ 'title' => "Аппарат магнитотерапевтический АЛМАГ-01 Еламед", 'base_price' => 180,  'zalog' => 4500, 'cat' => "Аппарат магнитотерапевтический АЛМАГ-01 Еламед", "galery" => [
                "АЛМАГ-01 - 1.jpg",
                "АЛМАГ-01  -2.jpg",
                "АЛМАГ-01 -3.jpg",
                "АЛМАГ-01 -4.jpg",
                "АЛМАГ-01.jpg",
            ]],
            "0007" => [ 'title' => "Аппарат Элфор ПРОФ Невотон", 'base_price' => 20,  'zalog' => 3500, 'cat' => "Аппарат Элфор ПРОФ Невотон", 'galery' => [
                "Элфор-ПРОФ.gif",
                "4.jpg",
                "3.jpg",
                "2.jpg",
                "elfor-obl.jpg",
            ]],

            "1007" => [ 'title' => "Ингалятор компрессорный OMRON NE-C28 Plus (NE-C28P-RU)", 'base_price' => 20,  'zalog' => 3500, 'cat' => "Ингалятор компрессорный OMRON NE-C28 Plus (NE-C28P-RU)", 'galery' => [
                "Ингалятор компрессорный OMRON NE-C28 Plus (NE-C28P-RU) 2.jpg",
                "Ингалятор компрессорный OMRON NE-C28 Plus (NE-C28P-RU) 3.jpg",
                "Ингалятор компрессорный OMRON NE-C28 Plus (NE-C28P-RU) 4.jpg",
                "omron-compair-ne-c28-plus-1-800x800.jpg",
            ]],

            "0004" => [ 'title' => "Кровать механическая 3х секционная", 'base_price' => 300,  'zalog' => 5000, "cat" => "Кровать механическая 3х секционная", "galery" =>[

                "Кровать механическая Армед SAE-105-B 7.jpg",
                "Кровать механическая Армед SAE-105-B 6.jpg",
                "Кровать механическая Армед SAE-105-B 5.jpg",
                "Кровать механическая Армед SAE-105-B 4.jpg",
                "Кровать механическая Армед SAE-105-B 3.jpg",
                "Кровать механическая Армед SAE-105-B 2.jpg",
                "Кровать механическая Армед SAE-105-B 1.jpg",
                "Кровать механическая Армед SAE-105-B 7 (2).jpg",
            ]],

            "0005" => [ 'title' => "Кровать механическая 4х секционная", 'base_price' => 230,  'zalog' => 4000, "cat" => "Кровать механическая 4х секционная", "galery" =>[

                "Кровать механическая Армед SAE-104-E (3).jpg",
                "Кровать механическая Армед SAE-104-E (1).jpg",
                "Кровать механическая Армед SAE-104-E (4).jpg",
            ]],

            "1005" => [ 'title' => "Кровать механическая медицинская с ссанитарным оснащением", 'base_price' => 230,  'zalog' => 4000, "cat" => "Кровать механическая медицинская с ссанитарным оснащением", "galery" =>[
                "krovat-mehanicheskaya-med-mos-yg-5-mm-5124n-00-s-bokovym-perevorachivaniem-tualetnym-ustroystvo.jpg",
                "img_8561.jpg",
                "img_6148.jpg",
            ]],

            "0014" => [ 'title' => "Пароочиститель Karcher SC 2 EasyFix Premium", 'base_price' => 500,  'zalog' => 7500, "cat" => "Пароочиститель Karcher SC 2 EasyFix Premium", "galery" =>[

                "пароочиститель.jpg",
                "d1__2_-min_hoti-19.jpg",
                "d0-_3_.jpg",
                "1845387.5.jpg",
                "2586.970.jpg",
                "1_512-050-53.jpg",
                "пароочиститель 1.jpg",
            ]  ],

            "0013" => [ 'title' => "Пылесос для хим.чистки Kerchar", 'base_price' => 900,  'zalog' => 7500, "cat" => "Пылесос для химчистки Karcher PUZZI 10", "galery" =>[

                "керхер3.jpg",
                "керхер4.jpg",
                "керхер7.jpg",
                "керхер.jpg",
            ] ],

            "0009" => [ 'title' => "Ходунки", 'base_price' => 30,  'zalog' => 2000, "cat" => "Ходунки складные Ortonica XS305", "galery" =>[
                "hd_1.png",
                "orig.webp",
                "Ходунки складные Ortonica XS305.jpg",
            ]  ],

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
            $galery = [];

            if (isset($item['galery'])) {
                foreach ($item['galery'] as $pict) {
                    Storage::disk('public')->put('product_rental/'.Str::slug($key.'_'.$pict), file_get_contents(public_path('base//product//rental//'.$item['cat'].'//'.$pict)), 'public');
                    $galery[] = [
                        'img' => 'product_rental/'.Str::slug($key.'_'.$pict),
                        'title'  => $item['title']
                    ];
                }
            }

            DB::table("product_rentals")->insert([
                "sku" => $key,
                "title" => $item['title'],
                "slug" => Str::slug($item['title']),
                'img' => ($galery)?$galery[0]['img']:"product_rental/1.jpg",
                'description' => $item['title'],
                'short_description' => $item['title'],
                'base_price' => $item['base_price'],
                'sales' => json_encode( $sales ),
                'galery' => json_encode( $galery, true ),
                'zalog' => $item['zalog'],
                'viev_count' => 1,
                'seo_title' => $item['title'] . " - взять в аренду в Курске",
                'seo_description' => $item['title'] . " - взять в аренду в Курске",
            ]);
        }
    }
}
