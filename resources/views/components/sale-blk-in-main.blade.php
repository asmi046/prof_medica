
<section class="section section__sale-equipment">
    <div class="container">
        <h2 class="title">Продажа оборудования</h2>
        <div class="sale-equipment__wrapper">
            @foreach ($categories as $item)
                <x-cards.sale-eqiupment :item="$item"></x-cards.sale-eqiupment>
            @endforeach
        </div>
    </div>
</section>
