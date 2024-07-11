@extends('layouts.all')

@php
    $title = 'Кровать для лежачих больных 2х-секционная';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <section class="equipment__panel">
        <div class="container">
            <div class="equipment__titel_panel">
                <h1 class="titel_panel title">Кровать для лежачих больных 2х-секционная</h1>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
        </div>
    </section>


    <section class="card-item">
        <div class="container">
            <div class="card-item__wrapper">
                <div class="card-item__img">
                    <img src="{{ asset('img/card-items/card-item1.png') }}" alt="Карточка товара">
                </div>
                <div class="card-item__description">
                    <h3>Описание оборудования</h3>
                    <div class="card-item__description_text">
                        <p>Модель имеет фиксированную высоту ложа, регулирование спинной секции осуществляется с помощью
                            вращающейся ручки. Часть для ног фиксированная.
                        </p>
                        <p>Поверхность металлической кровати покрыта порошком на эпоксидной основе и просушена в термическом
                            туннеле при +200 °С. Производитель использовал металлический профиль квадратного сечения 40 x 40
                            мм.
                        </p>
                        <p>Отдельные секции изготовлены из труб, диаметр которых равен 32 мм.
                            Ножки выполнены из трубы, имеющей диаметр 30 мм, с пластиковыми наконечниками.</p>
                    </div>
                    <form action="#">
                        <h3>Рассчитать стоимость аренды</h3>
                        <p>Сутки: 300 р.</p>
                        <label for="rentDay">Дней аренды:</label>
                        <input type="number" id="rentDay" value="10">
                        <p><strong>Сумма 2000 р.</strong></p>
                        <label for="phoneNum">Телефон:</label>
                        <input type="tel" id="phoneNum" placeholder="+ 7 (000) 000-00-00">
                        <input type="submit" class="button" value="Взять в аренду">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
