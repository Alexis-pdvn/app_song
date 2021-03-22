@extends('templates.general')

@section('contenu')

    @include("partials._header")
    @include("partials._errors")

    <section class="container">

        <h1>Upload your musics here</h1>

        <form method="post" action="/songs"  enctype="multipart/form-data">
            @csrf
            <div>
                <div>
                    <input type="text" placeholder="Music Title" name="title" value="{{old('title')}}">
                </div>
                <div>
                    <input type="file" placeholder="Choose a file" name="musique">
                </div>                    
            </div>
            <div>
                <button>Upload</button>
            </div>
        </form>
    </section>

@endsection