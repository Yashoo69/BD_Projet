@extends('base')

@section('css', 'characterDetail')

@section('title', 'Description')

@section('content')

    <div class="character_details">
        <p>Nom : {{ $character->name}} </p>
    </div>
    <div class="character_details">
        <p>Année de création : {{ $character->creation_year }} </p>
    </div>
    <div class="character_details">
        <p>Nom de la BD : {{ $character->comic_name }} </p>
    </div>
    {{-- <div>
        <p>Dessinateur : {{ $character->drawer->name }} </p>
    </div> --}}

@endsection