@extends('base')

@section('css', 'characterDetail')

@section('title', 'Description')

@section('content')
    <div>
        <p>Nom : {{ $drawer->name}} </p>
    </div>
    <div>
        <p>Année de naissance : {{ $drawer->birth_year }} </p>
    </div>
    <div>
        <p>Nationalité : {{ $drawer->nationality }} </p>
    </div>
@endsection