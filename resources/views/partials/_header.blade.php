<header class="header_section container">

        <a class="header_section_logo"><span>MMI</span>'SOUND</a>

        <form class="header_section_formulaire" id="search" method="get" action="/search">
            <input class="input-text" type="text" name="search" Placeholder="Research here an artist or a music">
            <input type="submit" Value="Go">
        </form>

        <div class="header_setion_nav">

            <div class="header_section_nav_icon">

                <i class="far fa-user-circle"></i>
                <i class="fas fa-chevron-down"></i>
                
            </div>
            
            <nav class="header_section_nav_a">
                <a href="">My Account</a>
                <a href="">Upload</a>
                <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <!--@guest
                            @if (Route::has('login'))
                                    <a href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            @endif
                            
                            @if (Route::has('register'))
                                    <a href="{{ route('register') }}">{{ __('Créer un compte') }}</a>
                            @endif
                        @else
                        <a href="/songs/create">Déposer une musique</a>
                        <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                @endguest-->
            </nav>
        </div>
</header>