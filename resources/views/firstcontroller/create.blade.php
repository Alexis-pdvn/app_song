@extends('templates.general')

@section('contenu')
    
    <section class="container createMain">
    <div class="flex_div">


        <div>

            <h1 class="createMain__title">Upload your musics here</h1>

        

            <form method="post" action="/songs" enctype="multipart/form-data">
            @include("partials._errors")
                @csrf
                <div class="createMain__form">
                    <div>
                        <input type="text" class="createMain__form--input" placeholder="Music Title" name="title" value="{{old('title')}}">
                    </div>
                    <div class="input_img">
                        <label for="input-file-song">
                            <img src="/images/icons/upload.png" alt="" srcset="">
                        </label>
                        <input type="file" name="song" id="input-file-song" class="createMain__form--file" >
                    </div>                    
                </div>
                <button class="btn-blue">Upload</button>
            </form>
        </div>

            <div class="listcreate">
            @include("partials._playlistcreate", ["songs" => Auth::user()->songs])

            </div>

        </div>

        


    </section>

@endsection