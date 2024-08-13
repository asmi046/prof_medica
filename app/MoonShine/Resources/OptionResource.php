<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Option;
use MoonShine\Fields\ID;

use MoonShine\Fields\Url;
use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Number;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Option>
 */
class OptionResource extends ModelResource
{
    protected string $model = Option::class;

    protected string $title = 'Опции сайта';
    protected string $column = 'name';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Идентификатор', 'name')->readonly(),
                Text::make('Название', 'title'),
                Textarea::make('Значение', 'value'),
            ]),
        ];
    }

    /**
     * @param Option $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
