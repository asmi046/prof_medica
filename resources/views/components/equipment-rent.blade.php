    <section class="equipment_rent section">
        <div class="container">
            <div class="card__wrapper">
                @for ($i = 0; $i < 8; $i++)
                    <x-cards.rent-card></x-cards.rent-card>
                @endfor
            </div>
        </div>
    </section>
