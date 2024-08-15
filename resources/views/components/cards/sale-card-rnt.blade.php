<div class="card__item">
    <div class="card__item-img">
        <img src="{{ Storage::url($item->img)  }}"
            alt="{{ $item->title }}">
    </div>
    <div class="card__item-info">
        <div class="card__item_equipment">
            {{ $item->title }}
        </div>


        <div class="item__rent_price"><span class="price-card">{{ $item->price }}</span> руб.</div>

        <a href="{{ route('bay_product', $item->slug ) }}" class="button">Подробнее</a>
    </div>
</div>
