<section class="equipment_rent section">
    <div class="container">
        <h2 class="title">Оборудование в аренду</h2>
        <div class="card__wrapper">

            @foreach ($rent_product as $item )
                <x-cards.rent-card :item="$item"></x-cards.rent-card>
            @endforeach

        </div>
    </div>
</section>
