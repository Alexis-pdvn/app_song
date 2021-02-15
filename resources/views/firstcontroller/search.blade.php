@extends('templates.general')

@section('contenu')
    <h1>Recherche de {{$search}}</h1>

    <h4>Utilisataeurs</h4>

<ul>
@foreach($users as $s )
            <li><a href="/utilisateur/{{$s->id}}">{{ $s->name }}</a></li>
@endforeach 
</ul>

<h4>CHansons</h4>
@include("partials._songs");

@endsection