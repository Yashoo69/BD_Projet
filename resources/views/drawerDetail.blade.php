@extends('base')

@section('css', 'characterDetail')

@section('title', 'Description')

@section('content')

    <div class="character_details">
        <p>Nom : {{ $drawer->name}} </p>
    </div>
    <div class="character_details">
        <p>Année de naissance : {{ $drawer->birth_year }} </p>
    </div>
    <div class="character_details">
        <p>Nationalité : {{ $drawer->nationality }} </p>
    </div>

@endsection