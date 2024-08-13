<?php

namespace App\View\Components;

use Cache;
use Closure;
use App\Models\Option;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BannerInMain extends Component
{
    /**
     * Create a new component instance.
     */

    public $heder;
    public $text;

    public function __construct()
    {

        $this->heder = Cache::rememberForever('main_banner_h', function () {
            $h = Option::where('name', 'main_banner_h')->first();
            return ($h)?$h['value']:"Аренда медицинского оборудования в Курске";
        });

        $this->text = Cache::rememberForever('main_banner_text', function () {
            $h = Option::where('name', 'main_banner_text')->first();
            return ($h)?$h['value']:"У нас Вы можете взять в аренду оборудование для реабелитации пациентов (кравати, каляски, кастыли и т. д.). У нас гибкие условия и прогрессивная система скидок";
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner-in-main');
    }
}
