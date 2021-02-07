@extends('templates.general')

@section('contenu')

    <h1>Poster votre musique</h1>

    @include("partials._errors")

    <section class="page-section">
        <div class="container">
            <form class="contact-form" method="post" action="/songs"  enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="Titre de la musique" name="title" value="{{old('title')}}">
                    </div>
                    <div class="col-md-6">
                        <input type="file" placeholder="URL de la musique" name="musique">
                    </div>                    
                </div>
                <div class="text-center">
                    <button class="site-btn">Send</button>
                </div>
            </form>
        </div>
    </section>

@endsection