@extends('layouts.all')

@php
    $title = 'Главная';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')


    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <a href="#"><img class="header__logo" src="{{ asset('/img/icons/logo-icon.svg') }}"
                        alt="Логотип Профмедика"></a>
                <nav>
                    <ul class="header__menu menu">
                        <li class="menu__items"><a class="item" href="#">Оборудование в аренду</a></li>
                        <li class="menu__items"><a class="item item-active" href="#">Купить оборудование</a>
                        </li>
                        <li class="menu__items"><a class="item" href="#">Контакты</a>
                        </li>
                    </ul>
                </nav>
                <a href="tel:+79090000000" class="menu__call">+7 909 000 00 00</a>

                <button class="menu__mobile-button">
                    <img src="{{ asset('/img/icons/menu-icon.svg') }}" alt="Мобильное меню">
                </button>
            </div>
    </header>

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
                <div class="card__item">
                    <div class="card__item-img">
                        <img src="{{ asset('/img/card-items/hodynki_na_kolesax.png') }}"
                            alt="Фото оборудования ходунков на колёсах производства R Wheel">
                    </div>
                    <div class="card__item-info">
                        <div class="card__item_equipment">
                            Ходунки на колесах R Wheel
                        </div>
                        <div class="card__item__rent">
                            <div class="item__rent">
                                <div class="item__rent_time">Сутки:</div>
                                <div class="item__rent_price">300 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Неделя:</div>
                                <div class="item__rent_price">1000 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Месяц:</div>
                                <div class="item__rent_price">7000 руб</div>
                            </div>
                        </div>
                        <button class="button">Взять в аренду</button>
                    </div>
                </div>
                <div class="card__item">
                    <div class="card__item-img">
                        <img src="{{ asset('/img/card-items/kreslo-kalyaska-ArmedH002.png') }}"
                            alt="Фото оборудования Кресло-коляска для инвалидов производства Armed H002">
                    </div>
                    <div class="card__item-info">
                        <div class="card__item_equipment">
                            Кресло-коляска для инвалидов "Armed" H002
                        </div>
                        <div class="card__item__rent">
                            <div class="item__rent">
                                <div class="item__rent_time">Сутки:</div>
                                <div class="item__rent_price">300 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Неделя:</div>
                                <div class="item__rent_price">1000 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Месяц:</div>
                                <div class="item__rent_price">7000 руб</div>
                            </div>
                        </div>
                        <button class="button">Взять в аренду</button>
                    </div>
                </div>
                <div class="card__item">
                    <div class="card__item-img">
                        <img src="{{ asset('/img/card-items/kostyli-armed-derevo.png') }}"
                            alt="Фото оборудования Костыли производства Армед деревянные">
                    </div>
                    <div class="card__item-info">
                        <div class="card__item_equipment">
                            Костыли "Армед" деревянные
                        </div>
                        <div class="card__item__rent">
                            <div class="item__rent">
                                <div class="item__rent_time">Сутки:</div>
                                <div class="item__rent_price">300 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Неделя:</div>
                                <div class="item__rent_price">1000 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Месяц:</div>
                                <div class="item__rent_price">7000 руб</div>
                            </div>
                        </div>
                        <button class="button">Взять в аренду</button>
                    </div>
                </div>
                <div class="card__item">
                    <div class="card__item-img">
                        <img src="{{ asset('/img/card-items/tonometr-automatic-dlya-davlenya.png') }}"
                            alt="Фото оборудования Тонометр автоматический для измерения давления">
                    </div>
                    <div class="card__item-info">
                        <div class="card__item_equipment">
                            Тонометр автоматический / для измерения давления
                        </div>
                        <div class="card__item__rent">
                            <div class="item__rent">
                                <div class="item__rent_time">Сутки:</div>
                                <div class="item__rent_price">300 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Неделя:</div>
                                <div class="item__rent_price">1000 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Месяц:</div>
                                <div class="item__rent_price">7000 руб</div>
                            </div>
                        </div>
                        <button class="button">Взять в аренду</button>
                    </div>
                </div>
                <div class="card__item">
                    <div class="card__item-img">
                        <img src="{{ asset('/img/card-items/tonometr-automatic-dlya-davlenya.png') }}"
                            alt="Фото оборудования Тонометр автоматический для измерения давления">
                    </div>
                    <div class="card__item-info">
                        <div class="card__item_equipment">
                            Ходунки на колесах R Wheel
                        </div>
                        <div class="card__item__rent">
                            <div class="item__rent">
                                <div class="item__rent_time">Сутки:</div>
                                <div class="item__rent_price">300 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Неделя:</div>
                                <div class="item__rent_price">1000 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Месяц:</div>
                                <div class="item__rent_price">7000 руб</div>
                            </div>
                        </div>
                        <button class="button">Взять в аренду</button>
                    </div>
                </div>
                <div class="card__item">
                    <div class="card__item-img">
                        <img src="{{ asset('/img/card-items/tonometr-automatic-dlya-davlenya.png') }}"
                            alt="Фото оборудования Тонометр автоматический для измерения давления">
                    </div>
                    <div class="card__item-info">
                        <div class="card__item_equipment">
                            Ходунки на колесах R Wheel
                        </div>
                        <div class="card__item__rent">
                            <div class="item__rent">
                                <div class="item__rent_time">Сутки:</div>
                                <div class="item__rent_price">300 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Неделя:</div>
                                <div class="item__rent_price">1000 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Месяц:</div>
                                <div class="item__rent_price">7000 руб</div>
                            </div>
                        </div>
                        <button class="button">Взять в аренду</button>
                    </div>
                </div>
                <div class="card__item">
                    <div class="card__item-img">
                        <img src="{{ asset('/img/card-items/tonometr-automatic-dlya-davlenya.png') }}"
                            alt="Фото оборудования Тонометр автоматический для измерения давления">
                    </div>
                    <div class="card__item-info">
                        <div class="card__item_equipment">
                            Ходунки на колесах R Wheel
                        </div>
                        <div class="card__item__rent">
                            <div class="item__rent">
                                <div class="item__rent_time">Сутки:</div>
                                <div class="item__rent_price">300 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Неделя:</div>
                                <div class="item__rent_price">1000 руб</div>
                            </div>
                            <div class="item__rent">
                                <div class="item__rent_time">Месяц:</div>
                                <div class="item__rent_price">7000 руб</div>
                            </div>
                        </div>
                        <button class="button">Взять в аренду</button>
                    </div>
                </div>
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
                <div class="sale-equipment__card">
                    <div class="sale-equipment__info">
                        <div class="equipment__info_top">
                            <h3 class="sale-equipment__title">
                                Технические
                                средства
                                реабилитации
                            </h3>
                            <p class="sale-equipment_text">
                                Инвалидные коляски,
                                костыли, ходунки,
                                трости, и т. д.
                            </p>
                        </div>
                        <a href="#" class="button button_ghost">Подробнее</a>
                    </div>

                    <img src="{{ asset('/img/card-photo/exp1.png') }}"
                        alt="Картинка к разделу: технические средства реабилитации">

                </div>
                <div class="sale-equipment__card">
                    <div class="sale-equipment__info">
                        <div class="equipment__info_top">
                            <h3 class="sale-equipment__title">
                                Медицинская
                                техника
                            </h3>
                            <p class="sale-equipment_text">
                                Тонометры, термометры,
                                ингаляторы, пульсоксиметры,
                                кислородные концентраторы
                            </p>
                        </div>
                        <a href="#" class="button button_ghost">Подробнее</a>
                    </div>

                    <img src="{{ asset('/img/card-photo/exp2.png') }}" alt="Картинка к разделу: Медицинская техника">

                </div>
                <div class="sale-equipment__card">
                    <div class="sale-equipment__info">
                        <div class="equipment__info_top">
                            <h3 class="sale-equipment__title">
                                Косметология и
                                гигиена полости
                                рта
                            </h3>
                            <p class="sale-equipment_text">
                                Ультразвуковые чистки лица,
                                антивозрастные процедуры,
                                ирригаторы
                            </p>
                        </div>
                        <a href="#" class="button button_ghost">Подробнее</a>
                    </div>

                    <img src="{{ asset('/img/card-photo/exp3.png') }}"
                        alt="Картинка к разделу: Косметология и гигиена полости рта">

                </div>
                <div class="sale-equipment__card">
                    <div class="sale-equipment__info">
                        <div class="equipment__info_top">
                            <h3 class="sale-equipment__title">
                                Микроклимат
                                в помещении
                            </h3>
                            <p class="sale-equipment_text">
                                Очистители воздуха,
                                ионизаторы, бактерицидные
                                облучатели, соляные лампы
                            </p>
                        </div>
                        <a href="#" class="button button_ghost">Подробнее</a>
                    </div>

                    <img src="{{ asset('/img/card-photo/exp4.png') }}"
                        alt="Картинка к разделу:  Микроклимат в помещении">

                </div>
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

    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <a href="#"><img class="footer__logo" src="{{ asset('/img/icons/logo-icon.svg') }}"
                        alt="Логотип Профмедика"></a>
                <nav>
                    <ul class="footer__menu menu">
                        <li class="menu__items"><a class="item" href="#">Оборудование в аренду</a></li>
                        <li class="menu__items"><a class="item" href="#">Купить оборудование</a>
                        </li>
                        <li class="menu__items"><a class="item" href="#">Контакты</a>
                        </li>
                    </ul>
                </nav>
                <nav>
                    <ul class="footer__menu menu">
                        <li class="menu__items"><a class="item" href="#">Политика в области обаботки персональных
                                данных</a></li>
                        <li class="menu__items"><a class="item" href="#">Согласие на обработку
                                персональных данных</a>
                        </li>
                    </ul>
                </nav>
                <a href="tel:+79090000000" class="menu__call">+7 909 000 00 00</a>

                <button class="menu__mobile-button">
                    <img src="{{ asset('/img/icons/menu-icon.svg') }}" alt="Мобильное меню">
                </button>
            </div>
        </div>
    </footer>
@endsection
