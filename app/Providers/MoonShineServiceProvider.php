<?php

declare(strict_types=1);

namespace App\Providers;

use Closure;
use MoonShine\MoonShine;
use MoonShine\Pages\Page;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuElement;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\OptionResource;
use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Resources\CategoryResource;
use MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\ProductGaleryResource;
use App\MoonShine\Resources\ProductRentalResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Providers\MoonShineApplicationServiceProvider;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [
            new ProductGaleryResource()
        ];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.role_title'),
                    new MoonShineUserRoleResource()
                ),
            ]),

            MenuItem::make(
                static fn() => __('Мню'),
                new MenuResource()
            )->icon('heroicons.bars-3') ,

            MenuItem::make(
                static fn() => "Категории",
                new CategoryResource()
            )->icon('heroicons.squares-plus'),

            MenuItem::make(
                static fn() => "Товары (продажа)",
                new ProductResource()
            )->icon('heroicons.outline.archive-box'),

            MenuItem::make(
                static fn() => "Товары (Аренда)",
                new ProductRentalResource()
            )->icon('heroicons.clock'),

            MenuItem::make(
                static fn() => __('Страницы'),
                new PageResource()
            )->icon('heroicons.outline.clipboard-document') ,

            MenuItem::make(
                static fn() => __('Опции'),
                new OptionResource()
            )->icon('heroicons.adjustments-horizontal'),


            // MenuItem::make('Documentation', 'https://moonshine-laravel.com/docs')
            //     ->badge(fn() => 'Check')
            //     ->blank(),
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
