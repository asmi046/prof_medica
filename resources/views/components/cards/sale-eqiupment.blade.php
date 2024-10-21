<a href="{{ route('category', $item->slug) }}" class="sale-equipment__card">
    <div class="sale-equipment__info">
        <div class="equipment__info_top">
            <h3 class="sale-equipment__title">
                {{ $item->title }}
            </h3>
            <p class="sale-equipment_text">
                {{ $item->title_comment }}
            </p>
        </div>
        <button class="button button_ghost">Подробнее</button>
    </div>

    <div class="sale-equipment__img">
        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
    </div>
</a>
