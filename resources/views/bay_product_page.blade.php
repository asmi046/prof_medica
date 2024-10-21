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
                                <img src="{{ $product->img?Storage::url($product->img):asset('img/no_photo.png') }}" alt="{{ $product->title }}">
                            </swiper-slide>


                            @foreach ($product->galery as $item)
                                <swiper-slide>
                                    <img src="{{ Storage::url($item['img']) }}" alt="{{ $item['title'] }}">
                                </swiper-slide>
                            @endforeach

                        </swiper-container>

                </div>
                <div id="bay_panel" class="card-item card-item__description">
                    <h3>Описание оборудования</h3>
                    <div class="card-item__description_text">
                        {!! $product->description !!}
                    </div>
                    <bay-panel
                        product="{{ $product->title }}"
                        :price="{{$product->price}}"
                    ></bay-panel>
                </div>
            </div>
        </div>
    </section>
@endsection
