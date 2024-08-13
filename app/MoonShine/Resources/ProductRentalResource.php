<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use MoonShine\Fields\Json;

use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use App\Models\ProductRental;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<ProductRental>
 */
class ProductRentalResource extends ModelResource
{
    protected string $model = ProductRental::class;

    protected string $title = 'Продукты в аренду';

    protected string $column = 'title';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Артикул', "sku"),
                Text::make('Заголовок', 'title'),
                Text::make('Цена', 'base_price'),
                Text::make('Залог', 'zalog'),

                Slug::make('Окончание ссылки', "slug")->from('title')->unique()->hideOnIndex(),
                Image::make('Изображение', "img")->disk('public')->dir('product_rental'),
                Textarea::make('Описание', "description")->hideOnIndex(),
                Textarea::make('Короткое описание', "short_description")->hideOnIndex(),
                Number::make('Количество просмотров', "viev_count")->default(2)->hideOnIndex(),

                Json::make('Скидки', 'sales')
                ->fields([
                    Number::make('День', 'day'),
                    Number::make('Скидка', 'sale'),
                ])
                ->hideOnIndex(),

                Text::make('Seo заголовок', 'seo_title')->hideOnIndex(),
                Text::make('Seo описание', 'seo_description')->hideOnIndex(),
            ]),
        ];
    }

    /**
     * @param ProductRental $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
