<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\Product;
use App\Models\Category;
use MoonShine\Pages\Page;
use App\Models\ProductRental;
use MoonShine\Decorations\Grid;
use MoonShine\Metrics\ValueMetric;
use MoonShine\Components\MoonShineComponent;

class Dashboard extends Page
{
    /**
     * @return array<string, string>
     */
    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title()
        ];
    }

    public function title(): string
    {
        return $this->title ?: 'Сайт Профмедика';
    }

    /**
     * @return list<MoonShineComponent>
     */
    public function components(): array
	{
		return [
            Grid::make([

                ValueMetric::make("Товары в аренду")
                    ->value(Product::all()->count())
                    ->columnSpan(4),
                ValueMetric::make("Товары на продажу")
                    ->value(ProductRental::all()->count())
                    ->columnSpan(4),
                ValueMetric::make("Категорий")
                    ->value(Category::all()->count())
                    ->columnSpan(4),

            ]),
        ];
	}
}
