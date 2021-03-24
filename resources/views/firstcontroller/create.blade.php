@extends('templates.general')

@section('contenu')
    @include("partials._errors")

    <section class="container createMain">

        <h1 class="createMain__title">Upload your musics here</h1>

        <form method="post" action="/songs"  enctype="multipart/form-data">
            @csrf
            <div class="createMain__form">
                <div>
                    <input type="text" class="createMain__form--input" placeholder="Music Title" name="title" value="{{old('title')}}">
                </div>
                <div class="input_img">
                    <label for="input-file-song">
                        <img src="/images/icons/upload.png" alt="" srcset="">
                    </label>
                    <input type="file" name="song" id="input-file-song" class="createMain__form--file" name="musique">
                </div>                    
            </div>
            <button class="btn-blue">Upload</button>
        </form>
    </section>

@endsection