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

                <button class="menu__mobile-button" aria-expanded="false" aria-haspopup="true">
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
                    <a href="#">Перейти в каталог</a>
                </div>
                <div class="main__areas__img-wrapper">
                    <img src="{{ asset('/img/card-photo/arenda-image.png') }}"
                        alt="Картинка аренды медицинского оборудования">
                </div>
            </div>
        </div>
    </main>

@endsection
