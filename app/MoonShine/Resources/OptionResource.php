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
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
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

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function export(): ?ExportHandler
    {
        return null;
    }

    /**
     * @return list<Field>
     */
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Идентификатор', 'name')->readonly(),
            Text::make('Название', 'title'),
            Textarea::make('Значение', 'value')->changeFill(
                function($data, Field $field) {
                    return mb_strimwidth(strip_tags($data->value), 0, 80, "...");
                }
            )
        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function formFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Идентификатор', 'name')->readonly(),
            Text::make('Название', 'title'),
            Textarea::make('Значение', 'value'),
        ];
    }

    /**
     * @return list<Field>
     */
    public function detailFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Идентификатор', 'name')->readonly(),
            Text::make('Название', 'title'),
            Textarea::make('Значение', 'value'),
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
