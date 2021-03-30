

@foreach($songs as $s )

    <li class="list_Content">
        
        <div class="list_Content_song">
                <a href="#" data-file="{{$s->url}}" class="song" id="songs">{{ $s->title }}</a>     
        </div>
        
        <div>
        </div>

        <div class="list_Content_user">
            <a href="/utilisateur/{{ $s->user->id }}">{{ $s->user->name }}</a>
        </div>
       

    </li>
@endforeach 
</ul>

</div>