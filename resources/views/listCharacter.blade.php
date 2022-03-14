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
                @if(Session::get('loginId'))
                <td>Supprimer</td>
                <td>Editer</td>
                @endif
            </tr>
        </thead>
        <tbody>
            @if(Session::has('fail'))
                <div class="alert alert-danger autorized">{{Session::get('fail')}}</div>
            @endif
    
            @foreach ($characters as $character)
            <tr>
    
                <td><a class="tabLine" href="characterDetail/{{ $character->id }}"> {{ $character->name }}</a></td>
                <td>{{ $character->creation_year }}</td>
                <td>{{ $character->comic_name }}</td>
              
                @if(Session::get('loginId'))
                <td>
                    <form action="deleteCharacter" method="POST" onsubmit="return confirm('Voulez vous vraiment supprimer ceci ? ')">
                        
    
                        @csrf
                        <input type="hidden" name="id" value="{{ $character->id }}">
                        <input type="submit" id="delete" value="X"> 
                    </form>
                </td>
                <td>
                    <a href="updateCharacter/{{$character->id}}"><button id="submit" name="button">X</button></a>
                    @csrf
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
