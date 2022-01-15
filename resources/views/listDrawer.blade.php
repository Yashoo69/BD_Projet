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
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif

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
                <a href="updateDrawer/{{ $drawer->id }}"><button>MAJ</button></a>
                @csrf
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
