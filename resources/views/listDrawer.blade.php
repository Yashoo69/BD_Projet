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
    
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
    
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
                    <a href="updateDrawer/{{ $drawer->id }}"><button id="submit" name="button">MAJ</button></a>
                    @csrf
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
