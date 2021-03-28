@extends('templates.general')

@section('contenu')

    <div class="container searchMain">
    <h1 class="searchMain__title">Recherche de : {{$search}}</h1>   

        <ul class="searchMain__list">
                @foreach($users as $u)
                    <li><a href="/utilisateur/{{$u->id}}">{{ $u->name }}</a></li>
                @endforeach 
                @foreach($songs as $s)
                    <li><a href="#" data-file="{{$s->url}}" class="song">{{ $s->title }}</a></li>
                @endforeach
        </ul>
    </div>

@endsection