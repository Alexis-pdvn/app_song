<div>
<h1 class="title_playlist">Discover other music</h1>
<ul class="list">



@foreach($songs as $s )

    <li class="list_Content">
        
    <div class="list_Content_song">
                <a href="#" data-file="{{$s->url}}" class="song">{{ $s->title }}</a>     
        </div>

        <div class="list_Content_user">
            <a href="/utilisateur/{{ $s->user->id }}">{{ $s->user->name }}</a>
        </div>
       
        <div class="list_Content_time">
            <p class="countLike">{{$s->votes}} <a href="" class="btn_like"><i class="far fa-heart"></i></a></p>
        </div>

    </li>
    
@endforeach 

</ul>
</div>