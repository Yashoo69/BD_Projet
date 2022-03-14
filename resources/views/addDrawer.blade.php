@extends('base')

@section('css', 'addCharacter')

@section('title', 'Ajouter un dessinateur')

@section('content')

<form id="addDrawer" action="/addDrawerBdd" method="POST" class="form"> 
    @csrf 
    <div class="form">
        <label for="name">Nom : </label>
        <input type="text" name="name" id="name" value="{{old('name')}}" required>
    </div>
    <div class="form">
        <label for="birth_year">Année de naissance : </label>
        <input type="number" name="birth_year" id="birth_year" value="{{old('birth_year')}}" required>
    </div>
    <div class="form">
        <label for="nationality">Nationalité : </label>
        <input type="text" name="nationality" id="nationality" value="{{old('nationality')}}" required>
    </div>
    <div class="form_button">
        <button id="submit" name="button">Ajouter</button>
    </div>
</form>

@endsection
