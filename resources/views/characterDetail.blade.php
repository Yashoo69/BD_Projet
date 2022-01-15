@extends('base')

@section('css', 'characterDetail')

@section('title', 'Description')

@section('content')
    <div>
        <p>Nom : {{ $character->name}} </p>
    </div>
    <div>
        <p>Année de création : {{ $character->creation_year }} </p>
    </div>
    <div>
        <p>Nom de la BD : {{ $character->comic_name }} </p>
    </div>
    {{-- <div>
        <p>Dessinateur : {{ $character->drawer->name }} </p>
    </div> --}}
@endsection