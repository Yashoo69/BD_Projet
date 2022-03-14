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
    
            @foreach ($drawers as $drawer)
            <tr>
    
                <td><a class="tabLine" href="drawerDetail/{{ $drawer->id }}"> {{ $drawer->name }}</a></td>
                <td>{{ $drawer->birth_year }}</td>
                <td>{{ $drawer->nationality }}</td>

                @if(Session::get('loginId'))
                <td>
                    <form action="deleteDrawer" method="POST" onsubmit="return confirm('Voulez vous vraiment supprimer ceci ? ')">
                        @csrf
                        <input type="hidden" name="id" value="{{ $drawer->id }}">
                        <input type="submit" id="delete" class="deleteButton" value="X"> 
                    </form>
                </td>
                <td>
                    <a href="updateDrawer/{{ $drawer->id }}"><button id="submit" name="button">X</button></a>
                    @csrf
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    

@endsection


