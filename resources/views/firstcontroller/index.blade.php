@extends('templates.general')

@extends('partials._header')

@section('contenu')

<div class="container">
    
    <div class="discover">
        @include("partials._songs")
    </div>

    <div class="playlist">
        @include("partials._playlist")
    </div>
        
</div>

@endsection