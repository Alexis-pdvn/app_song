@extends('templates.general')

@section('contenu')

    @include("partials._header")
    @include("partials._errors")

    <section class="container createMain">

        <h1 class="createMain__title">Upload your musics here</h1>

        <form method="post" action="/songs"  enctype="multipart/form-data">
            @csrf
            <div class="createMain__form">
                <div>
                    <input type="text" class="createMain__form--input" placeholder="Music Title" name="title" value="{{old('title')}}">
                </div>
                <div>
                    <input type="file" class="createMain__form--file" name="musique">
                </div>                    
            </div>
            <button class="btn-blue">Upload</button>
        </form>
    </section>

@endsection