@extends('layouts.all')

@php
    $title = $title;
    $description = $description;
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <x-banner-in-main></x-banner-in-main>

    <x-rent-in-main></x-rent-in-main>

    <x-advantages></x-advantages>

    <x-sale-blk-in-main></x-sale-blk-in-main>

    <x-text-in-main></x-text-in-main>

@endsection
