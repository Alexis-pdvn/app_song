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

                
            @foreach($allexcept as $u)
                @include("partials._newsong", ["songs" => $u->songs])
            @endforeach

        </div>

    @endguest 
    
                        
</div>

@endsection