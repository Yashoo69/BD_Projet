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
                <td>Supprimer</td>
                <td>Editer</td>
            </tr>
        </thead>
        <tbody>
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
    
            @foreach ($characters as $character)
            <tr>
    
                <td><a class="tabLine" href="characterDetail/{{ $character->id }}"> {{ $character->name }}</a></td>
                <td>{{ $character->creation_year }}</td>
                <td>{{ $character->comic_name }}</td>
              
                <td>
                    <form action="deleteCharacter" method="POST">
                        
    
                        @csrf
                        <input type="hidden" name="id" value="{{ $character->id }}">
                        <input type="submit" id="delete" value="X"> 
                    </form>
                </td>
                <td>
                    <a href="updateCharacter/{{$character->id}}"><button id="submit" name="button">MAJ</button></a>
                    @csrf
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
