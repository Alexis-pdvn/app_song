@extends('templates.general')

@section('contenu')

<div class="container">
    
    <div class="discover">
        @include("partials._cards")
    </div>

    @guest

        @if (Route::has('login'))

            <h1 class="playlist_nolog">To enjoy your playlist, connect you <a class="login_hover" href="{{ route('login') }}">{{ __('here') }}</a> !</h1>
            
        @endif

    @else

        <div class="playlist">
            @auth
                @include("partials._playlist", ["songs" => Auth::user()->songs])
            
            

                
            <div>
                <h1 class="title_playlist">Discover other music</h1>
                <ul class="list">

            @foreach($allexcept as $u)
                @include("partials._newsong", ["songs" => $u->songs])
            @endforeach

            </ul>
            </div>  
            
@endauth
        </div>

    @endguest 
    
                        
</div>

@endsection