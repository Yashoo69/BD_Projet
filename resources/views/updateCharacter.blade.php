@extends('base')

@section('css', 'addCharacter')

@section('title', 'Modifier un personnage')

@section('content')


<form id="addCharacter" action="/editCharacter" method="POST" class="form"> 
    @csrf 
    <input type="hidden" name="id" value="{{ $character->id }}">
    <div class="form">
        <label for="name">Nom : </label>
        <input type="text" name="name" id="name" value="{{ $character->name }}" required>
    </div>
    <div class="form">
        <label for="creation_year">Année de création : </label>
        <input type="number" name="creation_year" id="creation_year" value="{{ $character->creation_year }}" required>
    </div>
    <div class="form">
        <label for="comic_name">Nom de la BD : </label>
        <input type="text" name="comic_name" id="comic_name" value="{{ $character->comic_name }}" required>
    </div>
    <div class="form">
        <label for="drawer">Dessinateur : </label>
        <select type="text" name="drawer_id" id="drawer" required>
            @foreach ($drawers as $drawer)
                @if ($character->drawer_id === $drawer->id)
                    <option value="{{ $drawer->id }}" selected>{{ $drawer->name }}</option> 
                @else
                    <option value="{{ $drawer->id }}">{{ $drawer->name }}</option> 
                @endif
            @endforeach
        </select>
    </div>
    <div class="form">
        <button id="submit" name="button">Modifier</button>
    </div>
  </form>
@endsection
