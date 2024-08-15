<div class="sale-equipment__card">
    <div class="sale-equipment__info">
        <div class="equipment__info_top">
            <h3 class="sale-equipment__title">
                {{ $item->title }}
            </h3>
            <p class="sale-equipment_text">
                {{ $item->title_comment }}
            </p>
        </div>
        <a href="{{ route('category', $item->slug) }}" class="button button_ghost">Подробнее</a>
    </div>

    <div class="sale-equipment__img">
        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
    </div>
</div>
