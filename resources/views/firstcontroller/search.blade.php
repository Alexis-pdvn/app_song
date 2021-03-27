@extends('templates.general')

@section('contenu')

    <div class="container searchMain">
    <h1 class="searchMain__title">Recherche de : {{$search}}</h1>   

        <ul>
            @foreach($users as $s)
                <li><a href="/utilisateur/{{$s->id}}">{{ $s->name }}</a></li>
            @endforeach 
        </ul>
    </div>

@endsection