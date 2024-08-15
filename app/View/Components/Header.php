<?php

namespace App\View\Components;

use Closure;
use App\Models\Option;
use App\Models\Menu\Menu;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class Header extends Component
{
    /**
     * Create a new component instance.
     */

    public $phone;
    public $main_menu;

    public function __construct()
    {
        $this->phone = Cache::rememberForever('phone', function () {
            $h = Option::where('name', 'phone')->first();
            return ($h)?$h['value']:"+7 900 000 00 00";
        });

        $this->main_menu = Cache::rememberForever('main_menue', function () {
            $h = Menu::where('menue_id', 'Главное меню')->get();
            return $h;
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
