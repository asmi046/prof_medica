<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductRentalController extends Controller
{
    public function rental_catalog() {

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

    public function rental_product() {

    }
}
