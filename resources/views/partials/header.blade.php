<header>
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </div>
        <nav>
            <ul class="d-flex">
                <li>
                    <a href="{{ route('characters')}}">CHARACTERS</a>
                </li>
                <li class="active">
                    <a href="{{ route('comics')}}">COMICS</a>
                </li>
                <li>
                    <a href="{{ route('movies')}}">MOVIES</a>
                </li>
                <li>
                    <a href="{{ route('tv')}}">TV</a>
                </li>
                <li>
                    <a href="{{ route('games')}}">GAMES</a>
                </li>
                <li>
                    <a href="{{ route('collectibles')}}">COLLECTIBLES</a>
                </li>
                <li>
                    <a href="{{ route('videos')}}">VIDEOS</a>
                </li>
                <li>
                    <a href="{{ route('fans')}}">FANS</a>
                </li>
                <li>
                    <a href="{{ route('news')}}">NEWS</a>
                </li>
                <li>
                    <a href="{{ route('shop')}}">SHOP</a>
                </li>
            </ul>
        </nav>
    </div>
</header>