@extends('layouts.all')

@php
    $title = "Контакты компании «ПрофМедика»";
    $description = "Контакты компании «ПрофМедика» - аренда и продажа средств реабилитации";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <section class="equipment__panel">
        <div class="container">
            <div class="equipment__titel_panel">
                <h1 class="titel_panel title">{{ $title }}</h1>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="text_styles breadcrumbs_section">
        <div class="container">
            <div class="contacts_blk">
                @if (isset($contacts_data["phone"]))
                    <p class="phone">
                        <a href="tel:+7{{phone_format($contacts_data["phone"])}}" class="menu__call">{{$contacts_data["phone"]}}</a>
                    </p>
                @endif

                @if (isset($contacts_data["phone2"]))
                    <p class="phone">
                        <a href="tel:+7{{phone_format($contacts_data["phone2"])}}" class="menu__call">{{$contacts_data["phone2"]}}</a>
                    </p>
                @endif

                @if (isset($contacts_data["email"]))
                    <p class="email">
                        <a href="mailto:{{$contacts_data["email"]}}" class="menu__call">{{ $contacts_data["email"] }}</a>
                    </p>
                @endif

                @if (isset($contacts_data["adres"]))
                    <p class="adres">
                        {{ $contacts_data["adres"] }}
                    </p>
                @endif

            </div>
            <x-map-in-page :data="$contacts_data"></x-map-in-page>
        </div>
    </section>

@endsection

