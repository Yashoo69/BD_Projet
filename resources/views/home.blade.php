@extends('base')

@section('css', 'home') 

@section('title', 'Accueil')

@section('content')


<h2> " La bande dessinée & ses personnages " </h2>
@if(Session::get('loginId'))
<h3>Bienvenue a toi </h3>

<hr>
@endif
@if(!Session()->has('loginId'))
<h3>Rejoint-nous !! </h3>
@endif  





@endsection
