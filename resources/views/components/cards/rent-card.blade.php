<div class="card__item">
    <div class="card__item-img">
        <img src="{{ Storage::url($item->img) }}"
            alt="{{ $item->title }}">
    </div>

    <div class="card__item-info">
        <div class="card__item_equipment">
            {{ $item->title }}
        </div>
        <div class="card__item__rent">
            <div class="item__rent">
                <div class="item__rent_time">Сутки:</div>
                <div class="item__rent_price">{{ get_rent_price($item->base_price, $item->sales, 1) }} руб</div>
            </div>
            <div class="item__rent">
                <div class="item__rent_time">Неделя:</div>
                <div class="item__rent_price">{{ get_rent_price($item->base_price, $item->sales, 7) }} руб</div>
            </div>
            <div class="item__rent">
                <div class="item__rent_time">Месяц:</div>
                <div class="item__rent_price">{{ get_rent_price($item->base_price, $item->sales, 30) }} руб</div>
            </div>
        </div>
        <a href="#" class="button">Взять в аренду</a>
    </div>
</div>
