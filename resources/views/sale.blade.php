@extends('layouts.all')

@php
    $title = 'Медицинское оборудование на продажу';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <section class="equipment__panel">
        <div class="container">
            <div class="equipment__titel_panel">
                <h1 class="titel_panel title">Медицинское оборудование на продажу</h1>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
        </div>
    </section>
    <x-equipment-sale-rnt></x-equipment-sale-rnt>
@endsection
