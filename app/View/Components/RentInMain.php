<?php

namespace App\View\Components;

use Closure;
use App\Models\ProductRental;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class RentInMain extends Component
{
    public $rent_product;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->rent_product = ProductRental::select()->take(8)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rent-in-main');
    }
}
