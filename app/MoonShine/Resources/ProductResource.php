<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Product;
use MoonShine\Fields\ID;

use MoonShine\Fields\Json;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Position;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Block;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Components\MoonShineComponent;
use App\MoonShine\Resources\ProductGaleryResource;

/**
 * @extends ModelResource<Product>
 */
class ProductResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Товары на продажу';
    protected string $column = 'title';

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function export(): ?ExportHandler
    {
        return null;
    }

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
                Text::make('Цена', 'price'),
                Text::make('Цена со скидкой', 'old_price'),
                Slug::make('Окончание ссылки', "slug")->from('title')->unique()->hideOnIndex(),
                Image::make('Изображение', "img")->disk('public')->dir('product')->removable(),
                TinyMce::make('Описание', "description")->hideOnIndex(),
                TinyMce::make('Короткое описание', "short_description")->hideOnIndex(),
                Number::make('Количество просмотров', "viev_count")->default(2)->hideOnIndex(),
                Switcher::make('Хит продаж', 'hit'),
                Switcher::make('Новинка', 'new'),

                Json::make('Галерея', 'galery')
                ->fields([
                    Position::make(),
                    Image::make('Изображение', 'img'),
                    Text::make('Заголовок', 'title'),
                ])
                ->hideOnIndex()
                ->removable(),

                Text::make('Seo заголовок', 'seo_title')->hideOnIndex(),
                Text::make('Seo описание', 'seo_description')->hideOnIndex(),
            ]),


        ];
    }

    /**
     * @param Product $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'title' => ['required'],
            'sku' => ['required','unique:products,sku'],
            'price' => ['required'],
            'old_price' => ['required'],
            'img' =>($item->img === "")?['required']:[],
        ];
    }
}
