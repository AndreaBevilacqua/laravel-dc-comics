<main>
    <section id="jumbotron">
    </section>
    <div class="top-main">
        <div class="container card-container">
           @foreach ($comics as $index => $comic) 
           <div class="comic-card">
            <a href="{{url("/comics/$index")}}">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <h6>{{$comic['title']}}</h6>
            </a>
           </div>
           @endforeach
        </div>
        <button>LOAD MORE</button>
    </div>
    <div class="bottom-main">
        <div class="container">
            <ul>
                <li class="navbar-main"><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital"><a
                        href="#">Digital comics</a></li>
                <li class="navbar-main"><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise"><a
                        href="#">dc merchandise</a></li>
                <li class="navbar-main"><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="sub"><a
                        href="#">Subscription</a></li>
                <li class="navbar-main"><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="lot"><a href="#">Comic
                        shop locator</a></li>
                <li class="navbar-main"><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="via"><a href="#">Dc power
                        visa</a></li>
            </ul>
        </div>
    </div>
</main>