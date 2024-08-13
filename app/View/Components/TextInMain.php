<?php

namespace App\View\Components;

use Cache;
use Closure;
use App\Models\Option;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextInMain extends Component
{

    public $heder;
    public $text;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->heder = Cache::rememberForever('main_text_h', function () {
            $h = Option::where('name', 'main_text_h')->first();
            return ($h)?$h['value']:"О нас";
        });

        $this->text = Cache::rememberForever('main_text', function () {
            $h = Option::where('name', 'main_text')->first();
            return ($h)?$h['value']:"Текст о нас";
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-in-main');
    }
}
