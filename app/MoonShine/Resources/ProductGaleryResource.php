<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use MoonShine\Fields\Text;

use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use App\Models\ProductGalery;
use MoonShine\Decorations\Block;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<ProductGalery>
 */
class ProductGaleryResource extends ModelResource
{
    protected string $model = ProductGalery::class;

    protected string $title = 'ProductGaleries';

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
                Text::make('Тип продукта', "product_type")->default('Продажа')->readonly(),
                Image::make('Изображение', "lnk")->disk('public')->dir('product'),
                Text::make('Тег alt', 'alt'),
                Text::make('Тег title', 'title'),
            ]),
        ];
    }

    /**
     * @param ProductGalery $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
