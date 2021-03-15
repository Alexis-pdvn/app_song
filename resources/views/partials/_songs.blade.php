<div class="cards">
@foreach($songs as $s )

    <div class="cardsContent">

        <div class="cardsContent_user">
            <img src="{{ $s->user->avatar }}" alt="">
            <a href="/utilisateur/{{ $s->user->id }}">{{ $s->user->name }}</a>
        </div>

        <div class="cardsContent__song">
            <div>
                Sa dernière musique :
                <a href="#" data-file="{{$s->url}}" class="song">{{ $s->title }}</a>
            </div>
            <div class="cardsContent__like">
                {{$s->votes}} Likes
            </div>
        </div>

    </div>
    
@endforeach 
</div>