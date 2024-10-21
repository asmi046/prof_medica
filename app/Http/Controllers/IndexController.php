<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        $title = \Cache::rememberForever('main_seo_title', function () {
            $h = Option::where('name', 'main_seo_title')->first();
            return ($h)?$h['value']:"ПрофМедика - аренда и продажа реабелитационного оборудования в Курске";
        });

        $description = \Cache::rememberForever('main_seo_description', function () {
            $h = Option::where('name', 'main_seo_description')->first();
            return ($h)?$h['value']:"ПрофМедика - аренда и продажа реабелитационного оборудования в Курске";
        });

        return view('index', [
            'title' => $title,
            'description' => $description
        ]);
    }
}
