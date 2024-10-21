<?php

namespace App\View\Components;

use Closure;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CategorySelector extends Component
{
    public $all_categories;
    public $curent = null;
    /**
     * Create a new component instance.
     */
    public function __construct($curent)
    {
        $this->all_categories = Category::all();
        $this->curent = $curent;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-selector');
    }
}
