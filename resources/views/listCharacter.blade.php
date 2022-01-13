@extends('base')

@section('css', 'listCharacter')

@section('title', 'Liste des personnages')

@section('content')

<table>
    <thead>
        <tr id="tabTitle">
            <td>Nom</td>
            <td>Année de création</td>
            <td>Nom de la BD</td>
            <td>Dessinateur</td>
            <td>Supprimer</td>
            <td>Editer</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($characters as $character)
        <tr>
            <td><a class="tabLine" href="characterDetail/{{ $character->id }}"> {{ $character->name }}</a></td>
            <td>{{ $character->creation_year }}</td>
            <td>{{ $character->comic_name }}</td>
            @if (isset($character->drawer->name))
                <td>{{ $character->drawer->name}}</td>
            @else 
                <td>Ce dessinateur n'est pas dans la Base de données</td>
            @endif
            <td>
                <form action="deleteCharacter" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $character->id }}">
                    <input type="submit" id="delete" value="X"> 
                </form>
            </td>
            <td>
                <form action="updateCharacter" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $character->id }}">
                    <input type="submit" id="update" value="MAJ"> 
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
