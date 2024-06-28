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

    <section class="section section_sale-equipment">
        <div class="container">
            <h2 class="title">Продажа оборудования</h2>
        </div>
    </section>
@endsection
