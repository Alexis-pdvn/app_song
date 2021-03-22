@extends('templates.general')

@extends('partials._header')

@section('contenu')

<div class="container">
    
    <div class="discover">
        @include("partials._cards")
    </div>

    @guest

        @if (Route::has('login'))

            <h1>Connectez vous</h1>
            
        @endif

    @else

        <div class="playlist">
            @include("partials._playlist")
        </div>

    @endguest
                        
</div>

@endsection