<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("menus")->insert(
            [
                [
                    'menue_id' => "Главное меню",
                    'lnk' => "#",
                    'order' => 1,
                    'title' => "Оборудование в аренду",
                ],
                [
                    'menue_id' => "Главное меню",
                    'lnk' => "#",
                    'order' => 2,
                    'title' => "Купить оборудование",
                ],
                [
                    'menue_id' => "Главное меню",
                    'lnk' => "#",
                    'order' => 3,
                    'title' => "Контакты",
                ],

                [
                    'menue_id' => "Дополнительная информация",
                    'lnk' => "#",
                    'order' => 1,
                    'title' => "Политика в области обаботки персональных данных",
                ],

                [
                    'menue_id' => "Дополнительная информация",
                    'lnk' => "#",
                    'order' => 2,
                    'title' => "Согласие на обработку персональных данных",
                ],

            ]);


    }
}
