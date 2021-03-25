@extends('templates.general')

@section('contenu')

<div class="container">
    
    <div class="discover">
        @include("partials._cards")
    </div>

    @guest

        @if (Route::has('login'))

            <h1 class="playlist_nolog">To enjoy your playlist <a class="login_hover" href="{{ route('login') }}">{{ __('connect here') }}</a>!</h1>
            
        @endif

    @else

        <div class="playlist">
            @auth
            @include("partials._playlist", ["songs" => Auth::user()->songs])
            @endauth   

            @include("partials._newsong")
            <div>
            <h1 class="title_playlist">Discover other music</h1>
            <ul class="list">

            <!--@auth
            @foreach($allexcept as $u)
                @include("partials._songs", ["songs" => $u->songs()])
            @endforeach
            @endauth-->

            
<!--
            @foreach($allsongs as $s )

                <li class="list_Content">
                    
                    <div class="list_Content_song">
                            <a href="#" data-file="{{$s->url}}" class="song">{{ $s->title }}</a>     
                    </div>

                    <div class="list_Content_user">
                        <a href="/utilisateur/{{ $s->user->id }}">{{ $s->user->name }}</a>
                    </div>
                
                    <div class="list_Content_time">
                        <p class="countLike">{{$s->votes}} <a href="" class="btn_like"><i class="far fa-heart"></i></a></p>
                    </div>

                </li>
                
            @endforeach -->

            </ul>
            </div>


            

        </div>

    @endguest
                        
</div>

@endsection