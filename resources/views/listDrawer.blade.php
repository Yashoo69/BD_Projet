@extends('base')

@section('css', 'listCharacter')

@section('title', 'Liste des dessinateurs')

@section('content')

<table>
    <thead>
        <tr id="tabTitle">
            <td>Nom</td>
            <td>Année de naissance</td>
            <td>Nationalité</td>
            <td>Supprimer</td>
            <td>Editer</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($drawers as $drawer)
        <tr>
            <td><a class="tabLine" href="drawerDetail/{{ $drawer->id }}"> {{ $drawer->name }}</a></td>
            <td>{{ $drawer->birth_year }}</td>
            <td>{{ $drawer->nationality }}</td>
            <td>
                <form action="deleteDrawer" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $drawer->id }}">
                    <input type="submit" id="delete" value="X"> 
                </form>
            </td>
            <td>
                <form action="updateDrawer" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $drawer->id }}">
                    <input type="submit" id="update" value="MAJ"> 
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
