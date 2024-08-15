<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;
use App\Models\ProductRental;

class ProductRentalController extends Controller
{
    public function rent_catalog() {

        $products = ProductRental::paginate(12);

        $title = \Cache::rememberForever('rent_seo_title', function () {
            $h = Option::where('name', 'rent_seo_title')->first();
            return ($h)?$h['value']:"Аренда реабелитационного оборудования в Курске";
        });

        $description = \Cache::rememberForever('rent_seo_description', function () {
            $h = Option::where('name', 'rent_seo_description')->first();
            return ($h)?$h['value']:"Аренда реабелитационного оборудования в Курске";
        });

        return view('rent_catalog', [
            'title' => $title,
            'description' => $description,
            'products' => $products
        ]);
    }

    public function rent_product($slug) {
        $product = ProductRental::where('slug', $slug)->first();
        if($product == null) abort('404');

        return view('rent_product_page', ['product' => $product]);
    }
}
