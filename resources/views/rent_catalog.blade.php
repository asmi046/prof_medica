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

    <section class="equipment_rent section">
        <div class="container">
            <div class="card__wrapper">
                @foreach ($products as $item)
                    <x-cards.rent-card :item="$item"></x-cards.rent-card>
                @endforeach
            </div>
        </div>
    </section>

    <section class="pagination_section">
        <div class="container">
            <x-pagination :tovars="$products"></x-pagination>
        </div>
    </section>

@endsection
