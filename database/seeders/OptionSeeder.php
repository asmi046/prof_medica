<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("options")->insert(
            [
                [
                    "name" => "phone",
                    "type" => "plan",
                    'title' => 'Телефон',
                    "value" => "+7 999 101 00 00",
                ],
                [
                    "name" => "phone2",
                    "type" => "plan",
                    'title' => 'Телефон дополнительный',
                    "value" => "+7 000 000 00 00",
                ],

                [
                    "name" => "email",
                    "type" => "plan",
                    'title' => 'email',
                    "value" => "info@mail.com",
                ],

                [
                    "name" => "tg_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на Telegram',
                    "value" => "#",
                ],

                [
                    "name" => "vk_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на Vk',
                    "value" => "#",
                ],

                [
                    "name" => "adres",
                    "type" => "plan",
                    'title' => 'Адрес',
                    "value" => "г. Курск, Красная площадь, д2",
                ],

                [
                    "name" => "geo",
                    "type" => "plan",
                    'title' => 'Координаты',
                    "value" => "51.728827, 36.192036",
                ],

                // SEO главной
                [
                    "name" => "main_seo_title",
                    "type" => "text",
                    'title' => 'SEO заголовк главной',
                    "value" => "Аренда медицинского оборудования в Курске - ПрофМедика",
                ],

                [
                    "name" => "main_seo_description",
                    "type" => "text",
                    'title' => 'SEO описание главной',
                    "value" => "Аренда медицинского оборудования в Курске по выгодным ценам на выгодных условиях. Продажа реабилитационного оборудования.",
                ],

                // SEO каталога на продажу
                [
                    "name" => "catalog_seo_title",
                    "type" => "text",
                    'title' => 'SEO заголовк каталога',
                    "value" => "Продажа реабилитационного оборудования в Курске",
                ],

                [
                    "name" => "catalog_seo_description",
                    "type" => "text",
                    'title' => 'SEO описание каталога ',
                    "value" => "Продажа реабилитационного оборудования в Курске по выгодным ценам",
                ],

                // SEO каталога в аренду
                [
                    "name" => "rent_seo_title",
                    "type" => "text",
                    'title' => 'SEO заголовк аркенда',
                    "value" => "Реабилитационное оборудование в аренду в Курске",
                ],

                [
                    "name" => "rent_seo_description",
                    "type" => "text",
                    'title' => 'SEO описание аренда',
                    "value" => "Реабилитационное оборудование в аренду в Курске по выгодным ценам",
                ],

                // Баннер на главной

                [
                    "name" => "main_banner_h",
                    "type" => "text",
                    'title' => 'Заголовок баннера на главной',
                    "value" => "Аренда медицинского оборудования в Курске",
                ],

                [
                    "name" => "main_banner_text",
                    "type" => "text",
                    'title' => 'Текст баннера на главной',
                    "value" => "У нас Вы можете взять в аренду оборудование для реабелитации пациентов (кравати, каляски, кастыли и т. д.). У нас гибкие условия и прогрессивная система скидок",
                ],

                [
                    "name" => "main_text_h",
                    "type" => "text",
                    'title' => 'Заголовок текста на главной',
                    "value" => "О нас",
                ],

                [
                    "name" => "main_text",
                    "type" => "rich",
                    'title' => 'Текст на главной',
                    "value" => file_get_contents(public_path('base//main.html')),
                ],

            ]);
    }
}
