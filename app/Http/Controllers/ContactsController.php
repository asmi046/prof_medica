<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        $contacts_info = Option::where('name', 'phone')
                                ->orWhere('name', 'phone2')
                                ->orWhere('name', 'email')
                                ->orWhere('name', 'tg_lnk')
                                ->orWhere('name', 'vk_lnk')
                                ->orWhere('name', 'adres')
                                ->orWhere('name', 'geo')
                                ->get();

        $contacts_data = [];
        foreach ($contacts_info as $item) {
            $contacts_data[$item->name] = $item->value;
        }

        return view('contacts', ["contacts_data" => $contacts_data]);
    }
}
