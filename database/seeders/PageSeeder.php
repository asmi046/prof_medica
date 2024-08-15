<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("page_banner/page_head_4.webp", file_get_contents(public_path('base/page/page_head_4.webp')), 'public');

        DB::table("pages")->insert(
            [
                 [
                     'title' => 'Согласие на обработку персональных данных',
                     'slug' => Str::slug("Согласие на обработку персональных данных"),
                     'img' => "page_banner/page_head_4.webp",
                     'description' => file_get_contents(public_path('text//accept.html')),
                     'seo_title' => 'Согласие на обработку персональных данных',
                     'seo_description' => 'Согласие на обработку персональных данных',
                 ],

                 [
                     'title' => 'Политика конфиденциальности',
                     'slug' => Str::slug("Политика конфиденциальности"),
                     'img' => "page_banner/page_head_4.webp",
                     'description' => file_get_contents(public_path('text//policy.html')),
                     'seo_title' => 'Политика конфиденциальности',
                     'seo_description' => 'Политика конфиденциальности',
                 ],
        ]);

    }
}
