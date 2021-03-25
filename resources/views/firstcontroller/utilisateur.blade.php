@extends('templates.general')

@section('contenu')

    <section class="container userMain">
        <h2>You are on the <span>{{$user->name}}</span>'s profile</h2>

        <div class="userProfile">
            <div class="userProfile__img">
                


            @auth
                @if(Auth::id() !=$user->id)
                <div class="userProfile__img--edit">

                    <div class="bg-avatar_other-user" style="background-image: url(/uploads/avatars/{{ $user->avatar }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    </div>

                </div>

                @else
                
                <form enctype="multipart/form-data" action="/utilisateur/updateoverview" method="POST">
                    <div class="userProfile__img--edit">

                        <label for="input-file_avatar">
                            <i class="fas fa-pen-square"></i>
                        </label>

                        <div class="bg-avatar" style="background-image: url(/uploads/avatars/{{ $user->avatar }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        </div>

                    </div>

                    <input type="file" name="avatar" id="input-file_avatar" accept="image/png, image/jpeg, image/jpg" style="display:none" onClick="document.getElementById('btn-update-avatar').style.display = 'block';">

                    <input type="hidden" name="_token" value="{{ csrf_token () }}">

                    <input class="btn-blue" type="submit" value="Update your avatar" id="btn-update-avatar" style="display:none; margin-bottom: 20px;">

                </form>
                
                @endif
            @endauth
                
               

            </div>
            <div class="userProfile__info">
                <p class="userProfile__info--descTitle">Description :</p>
                <p id="overview" {{Auth::check() && Auth::id() == $user->id ? "contenteditable" : ""}} class="userProfile__info--descText">
                    {!! $user->overview == null ? "Please add a description" : $user->overview !!}
                </p>

                @if(Auth::check() && Auth::id() == $user->id)
                    <form id="overviewform" method="post" action="/utilisateur/updateoverview">
                        @csrf
                        <input type="hidden" name="overview"/>
                        <button type="submit" class="btn-blue">Valider</button>
                    </form>
                @endif

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
        <div class="playlist-user container">
            @include("partials._songs", ["songs" => $user->songs])
        </div>
    </div>

@endsection