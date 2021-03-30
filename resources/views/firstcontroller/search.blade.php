@extends('templates.general')

@section('contenu')

    <div class="container searchMain">
    <h1 class="searchMain__title">Search for : {{$search}}</h1>   

        <ul class="searchMain__list">

            <h1 class="searchMain__list_title">Users</h1>
                @foreach($users as $u)
                    <li><a href="/utilisateur/{{$u->id}}"><img src="/uploads/avatars/{{ $u->avatar }}" alt="">{{ $u->name }}</a></li>
                @endforeach 

                <div class="sectionsongmarg">
                    <h1 class="searchMain__list_title">Songs</h1>
                        @foreach($songs as $s)
                            <li><a href="#" data-file="{{$s->url}}" class="song">{{ $s->title }}</a></li>
                        @endforeach
                </div>
        </ul>
    </div>

@endsection