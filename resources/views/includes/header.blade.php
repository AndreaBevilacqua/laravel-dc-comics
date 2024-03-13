<header>
    <section class="container">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
        <div id="navbar">
            <ul>
                <li><a href="{{route('home')}}" class="{{Route::is('Home') ? 'active' : ''}}">Home</a></li>
                <li><a href="{{url('/')}}">Characters</a></li>
                <li><a href="{{route('comics')}}">Comics</a></li>
                <li><a href="{{url('/')}}">TV</a></li>
                <li><a href="{{url('/')}}">Movies</a></li>
                <li><a href="{{url('/')}}">Games</a></li>
                <li><a href="{{url('/')}}">Collectibles</a></li>
                <li><a href="{{url('/')}}">Videos</a></li>
                <li><a href="{{url('/')}}">Fans</a></li>
                <li><a href="{{url('/')}}">News</a></li>
                <li><a href="{{url('/')}}">Shop</a></li>
            </ul>
        </div>
    </section>
</header>