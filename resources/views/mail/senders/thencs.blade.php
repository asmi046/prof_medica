@extends('layouts.all')

@php
    $title = "Благодарим за обращении";
    $description = "Благодарим за обращении, ждите обратной связи от наших специалистов";
@endphp

@section('title', $title)
@section('description', $description)
@section('main')

<section class="section section__thencs">
    <div class="container">
        <h1>Спасибо что обратились в нашу компанию</h1>
        <p class="hard">💖</p>
        <p>Наши менеджеры свяжутся с Вами в ближайшее время.</p>
        <br>
        <a class="button" href="{{ route('home') }}">Вернуться на главную</a>
    </div>
</section>

<x-advantages></x-advantages>

@endsection
