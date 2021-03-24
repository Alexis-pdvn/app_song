@extends('templates.general')

@section('contenu')

    <section class="container userMain">
        <h2>You are on the <span>{{$user->name}}</span>'s profile</h2>

        <div class="userProfile">
            <div class="userProfile__img">
                <img src="{{ $user->avatar }}" alt="">
            </div>
            <div class="userProfile__info">
                <p class="userProfile__info--descTitle">Description :</p>
                <p class="userProfile__info--descText">{{ $user->overview }}</p>
                    <div class="userProfile__info--fieldMain">
                        <div>
                            <div>
                                <h2 class="userProfile__info--field">{{$user->theyLikeMe()->count()}}<span>&nbsp; Subscription</span></h2>
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2 class="userProfile__info--field">{{$user->ILikeThem()->count()}}<span>&nbsp; Subscriber</span></h2>
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2 class="userProfile__info--field">{{$user->songs()->count()}}<span>&nbsp; Songs</span></h2>
                            </div>
                        </div>
                    </div>

                    @auth
                        @if(Auth::id() !=$user->id)
                            @if(Auth::user()->ILikeThem->contains($user->id))
                                <a href="/suivre/{{ $user->id }}">Suivi</a>
                            @else
                                <a href="/suivre/{{ $user->id }}">Suivre</a>
                            @endif
                        @endif
                    @endauth
            </div>
        </div>
    </section>

    <div>
        <div class="playlist container">
            @include("partials._songs", ["songs" => $user->songs])
        </div>
    </div>

@endsection