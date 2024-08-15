@extends('layouts.all')

@php
    $title = (empty($product->seo_title))?$product->title:$product->seo_title;
    $description = (empty($product->seo_description))?$product->title:$product->seo_description;;
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <section class="equipment__panel">
        <div class="container">
            <div class="equipment__titel_panel">
                <h1 class="titel_panel title">{{ $product->title }}</h1>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :product="$title"></x-breadcrumbs.main>
        </div>
    </section>


    <section class="card-item">
        <div class="container">
            <div class="card-item__wrapper">
                <div class="card-item card-item__img">

                        <swiper-container pagination="true">
                            <swiper-slide>
                                <img src="{{ asset('img/card-items/card-item1.png') }}" alt="Карточка товара">
                            </swiper-slide>
                            <swiper-slide>
                                <img src="{{ asset('img/card-items/card-item1.png') }}" alt="Карточка товара">
                            </swiper-slide>
                        </swiper-container>

                </div>
                <div id="rent_panel" class="card-item card-item__description">
                    <h3>Описание оборудования</h3>
                    <div class="card-item__description_text">
                        {!! $product->description !!}
                    </div>
                    <rent-panel></rent-panel>
                    <form action="#">
                        <h3>Рассчитать стоимость аренды</h3>
                        <p>Сутки: {{ $product->base_price }} руб.</p>
                        <p>Залог: {{ $product->zalog }} руб.</p>
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
