@extends('templates.general')

@section('contenu')

<section class="intro-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h2 class="section-title">Vous êtes sur la page de <span>{{$user->name}}</span></h2>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p>{{ $user->overview }}</p>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="milestone">
                            <h2>{{$user->theyLikeMe()->count()}}<span>Abonnements</span></h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="milestone">
                            <h2>{{$user->ILikeThem()->count()}}<span>Abonnés</span></h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="milestone">
                            <h2>{{$user->songs()->count()}}<span>Musique(s)</span></h2>
                        </div>
                    </div>
                </div>

                @auth
                
                    @if(Auth::id() !=$user->id)
                        @if(Auth::user()->ILikeThem->contains($user->id))
                            <a href="/suivre/{{ $user->id }}" class="site-btn btn-line">Suivi</a>
                        @else
                            <a href="/suivre/{{ $user->id }}" class="site-btn btn-fade ">Suivre</a>
                        @endif

                    @endif

                @endauth

            </div>
            <div class="col-lg-5 offset-lg-1">
                <figure class="pic-frame">
                    <img src="{{ $user->avatar }}" alt="">
                </figure>
            </div>
        </div>
        
    </div>
</section>

<div class="container-fluid p-0">
                <h2>Retrouvé mes chansons</h2>
    <div class="playlist container">
        @include("partials._songs", ["songs" => $user->songs])

    </div>
</div>

@endsection