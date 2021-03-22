<h1 class="title_cards">Discover new artists !</h1>

<!-- Div enveloppe toutes les cards -->
<div class="cards">
    

@foreach($songs as $s )

    <div class="cardsContent">

    <!-- Div qui comporte l'img et le nom du user -->
        <div class="cardsContent_user">
            <img src="{{ $s->user->avatar }}" alt="">
            <a href="/utilisateur/{{ $s->user->id }}">{{ $s->user->name }}<i class="fas fa-chevron-right"></i></a>
        </div>

    <!-- Div qui comporte la musique et le nombre de like de la musique -->
        <div class="cardsContent_song">
            His last music :
            <div>
                <a href="#" data-file="{{$s->url}}" class="song">{{ $s->title }}</a>
                <p class="countLike">{{$s->votes}} <a href="" class="btn_like"><i class="far fa-heart"></i></a></p>
                
            </div>
        </div>

    </div>
    
@endforeach 
</div>