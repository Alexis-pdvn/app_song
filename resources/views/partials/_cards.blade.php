<h1 class="title_cards">Discover new artists !</h1>

<!-- Div enveloppe toutes les cards -->
<div class="cards">
    

@foreach($user as $u)

    <div class="cardsContent">

    <!-- Div qui comporte l'img et le nom du user -->
        <div class="cardsContent_user">
            <img src="/uploads/avatars/{{ $u->avatar }}" alt="">
            <a href="/utilisateur/{{ $u->id }}">{{ $u->name }}<i class="fas fa-chevron-right"></i></a>
        </div>

    <!-- Div qui comporte la musique et le nombre de like de la musique -->
        <div class="cardsContent_song">
            His last music :
            <div>
            @php
             $c = $u->songs()->orderBy("id", "desc")->first();
            @endphp
            @isset($c)

            <a href="#" data-file="{{$c->url}}" class="song">{{$c->title}}</a>
            <p class="countLike">{{$c->votes}} <a href="" class="btn_like"><i class="far fa-heart"></i></a></p>

            @endisset
                
            </div>
        </div>

    </div>
    
@endforeach 
</div>