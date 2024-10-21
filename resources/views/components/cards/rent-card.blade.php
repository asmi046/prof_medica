<a href="{{ route('rent_product', $item->slug)}}" class="card__item">
    <div class="card__item-img">
        <img src="{{ $item->img?Storage::url($item->img):asset('img/no_photo.png')  }}"
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
        <button class="button">Взять в аренду</button>
    </div>
</a>
