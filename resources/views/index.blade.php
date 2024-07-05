@extends('layouts.all')

@php
    $title = 'Главная';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')



    <main class="main">
        <div class="container">
            <div class="main__areas">
                <div class="main__areas__info">
                    <h1 class="main__title title">Аренда
                        медицинского
                        оборудования
                        в Курске</h1>
                    <p class="main__text">
                        У нас Вы можете взять в аренду оборудование для
                        реабелитации пациентов (кравати, каляски, кастыли и т. д.).
                        У нас гибкие условия и прогрессивная система скидок
                    </p>
                    <a class="button button__primary" href="#">Перейти в каталог</a>
                </div>
                <div class="main__areas__img-wrapper">
                    <img class="areas__img" src="{{ asset('/img/card-photo/arenda-image.png') }}"
                        alt="Картинка аренды медицинского оборудования">
                </div>
            </div>
        </div>
    </main>
    <section class="equipment_rent section">
        <div class="container">
            <h2 class="title">Оборудование в аренду</h2>
            <div class="card__wrapper">
                @for ($i = 0; $i < 8; $i++)
                    <x-cards.rent-card></x-cards.rent-card>
                @endfor
            </div>
        </div>
    </section>

    <section class="section section__advantages">
        <div class="container">
            <h2 class="title">Наши преимущества</h2>
            <div class="advantages__wrapper">
                <div class="advantages__card">
                    <div class="advantages__card_img">
                        <img src="{{ asset('/img/icons/people_advantages.svg') }}"
                            alt="Иконка широкого выбора оборудования для реабилитации">
                        <hr>
                    </div>

                    <div class="advantages__card_text">
                        Широкий выбор
                        оборудования для
                        реабилитации
                    </div>
                </div>

                <div class="advantages__card">
                    <div class="advantages__card_img">
                        <img src="{{ asset('/img/icons/time_advantages.svg') }}"
                            alt="Иконка прогрессивной системы скидок зависящая от срока аренды">
                        <hr>
                    </div>

                    <div class="advantages__card_text">
                        Прогрессивная система
                        скидок зависящая от
                        срока аренды
                    </div>
                </div>

                <div class="advantages__card">
                    <div class="advantages__card_img">
                        <img src="{{ asset('/img/icons/like_advantages.svg') }}"
                            alt="Иконка постоянное наличие оборудования, минимальные очереди">
                        <hr>
                    </div>

                    <div class="advantages__card_text">
                        Постоянное наличие
                        оборудования
                        минимальные очереди
                    </div>
                </div>

                <div class="advantages__card">
                    <div class="advantages__card_img">
                        <img src="{{ asset('/img/icons/quest_advantages.svg') }}"
                            alt="Иконка профессиональная консультативная помощь в подборе">
                        <hr>
                    </div>

                    <div class="advantages__card_text">
                        Профессиональная
                        консультация помощь
                        в подборе
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section__sale-equipment">
        <div class="container">
            <h2 class="title">Продажа оборудования</h2>
            <div class="sale-equipment__wrapper">

                @for ($i = 0; $i < 4; $i++)
                    <x-cards.sale-card></x-cards.sale-card>
                @endfor

            </div>
        </div>
    </section>

    <section class="section section__about">
        <div class="container">
            <div class="about__wrapper">
                <h2 class="title about__title">О нас</h2>
                <div class="about__text">
                    <p>Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего
                        сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я. Я так
                        счастлив, мой друг, так упоен ощущением покоя, что искусство мое страдает от этого. </p>
                    <p>Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты.
                        Когда от милой моей долины поднимается пар и полдневное солнце стоит над непроницаемой чащей темного
                        леса и лишь редкий луч проскальзывает в его святая святых, а я лежу в высокой траве у быстрого ручья
                        и, прильнув к земле, вижу тысячи всевозможных былинок и чувствую, как близок моему сердцу крошечный
                        мирок, что снует между стебельками, наблюдаю эти неисчислимые, непостижимые разновидности червяков и
                        мошек и чувствую близость всемогущего, создавшего нас по своему подобию, веяние вселюбящего,
                        судившего нам парить в вечном блаженстве, когда взор мой туманится и все вокруг меня и небо надо
                        мной запечатлены в моей душе, точно образ возлюбленной, - тогда, дорогой друг, меня часто томит
                        мысль: </p>
                    <p>"Ах! Как бы выразить, как бы вдохнуть в рисунок то, что так полно, так трепетно живет во мне,
                        запечатлеть отражение моей души, как душа моя - отражение предвечного бога!"</p>
                </div>
            </div>
        </div>
    </section>

@endsection
