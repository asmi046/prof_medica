@extends('layouts.all')

@section('title', $title)
@section('description', $description)

@section('main')
    <section class="equipment__panel">
        <div class="container">
            <div class="equipment__titel_panel">
                <h1 class="titel_panel title">Медицинское оборудование в аренду</h1>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
        </div>
    </section>

    <x-category-selector></x-category-selector>

    <x-equipment-sale-rnt></x-equipment-sale-rnt>

@endsection
