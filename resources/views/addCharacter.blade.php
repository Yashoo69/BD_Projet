@extends('base')

@section('css', 'addCharacter')

@section('title', 'Ajouter un personnage')

@section('content') 

<form id="addCharacter" action="/addCharacterBdd" method="POST" class="form"> 
    @csrf 
    <div class="form">
        <label for="name">Nom : </label>
        <input type="text" name="name" id="name" value="{{old('name')}}" required>
    </div>
    <div class="form">
        <label for="creation_year">Année de création : </label>
        <input type="number" name="creation_year" id="creation_year" value="{{old('creation_year')}}" required>
    </div>
    <div class="form">
        <label for="comic_name">Nom de la BD : </label>
        <input type="text" name="comic_name" id="comic_name" value="{{old('comic_name')}}" required>
    </div>
    
    <div class="form_button">
        <button id="submit" name="button">Ajouter</button>
    </div>
</form>

@endsection
