<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function catalog_for_bay() {

        $products = Product::paginate(12);

        $title = \Cache::rememberForever('catalog_seo_title', function () {
            $h = Option::where('name', 'catalog_seo_title')->first();
            return ($h)?$h['value']:"Продажа реабелитационного оборудования в Курске";
        });

        $description = \Cache::rememberForever('catalog_seo_description', function () {
            $h = Option::where('name', 'catalog_seo_description')->first();
            return ($h)?$h['value']:"Продажа реабелитационного оборудования в Курске";
        });

        return view('catalog', [
            'title' => $title,
            'description' => $description,
            'products' => $products
        ]);
    }

    public function category($cat) {
        return view('category');
    }
}
