<div>
<h1 class="title_playlist">Your playlist</h1>
<ul class="list">
    

@foreach($songs as $s )

    <li class="list_Content">
        
        <div class="list_Content_song">
                <a href="#" data-file="{{$s->url}}" class="song">{{ $s->title }}</a>     
        </div>

        <div>
        </div>
       
        <div class="list_Content_time">
            <p class="countLike">{{$s->votes}} <a href="" class="btn_like"><i class="far fa-heart"></i></a></p>
        </div>

    </li>
    
@endforeach 
</ul>
</div>