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
                    <rent-panel product="{{ $product->title }}" :zalog="{{ $product->zalog }}" :base="{{$product->base_price}}" :sales="{{ json_encode($product->sales) }}" ></rent-panel>
                </div>
            </div>
        </div>
    </section>
@endsection
