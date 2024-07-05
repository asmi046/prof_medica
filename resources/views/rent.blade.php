@extends('layouts.all')

@php
    $title = 'Аренда';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<section class="breadcrumbs_section">
    <div class="container">
        <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
    </div>
</section>

@endsection
