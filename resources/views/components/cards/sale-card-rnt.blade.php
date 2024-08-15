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

        <button class="button">Подробнее</button>
    </div>
</div>
