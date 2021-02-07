@extends('templates.general')

@section('contenu')

<div class="container-fluid p-0">
    <div class="row portfolio-area">
        <div class="col-lg-12">
            <div class="portfolio-area">
                <h2 class="section-title mb-5">A <span>wonderful trip</span> between pictures and PHP</h2>
            </div>
        </div>  

    
        @include("partials._songs")
    </div>
</div>

@endsection