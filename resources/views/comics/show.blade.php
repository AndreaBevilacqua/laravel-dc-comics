@extends('layouts.app')

@section('title','Dettaglio comic')

@section('cdns')
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
@endsection

@section('core-content')
    <section id="jumbotron"></section>
    <div class="blue-bar">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>
    <div class="container" id="single-card">
        <div class="details">
            <h1>{{ $comic->title }}</h1>
            <div class="green-bar">
                <div class="price">
                    <span>U.S. Price: {{ $comic->price }}</span>
                    <p>AVAILABLE</p>
                </div>
                <div class="checking">
                    Check Availability <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>
            <p class="text">{{ $comic->description }}</p>
            <div class="d-flex gap-2">
                <a href="{{ url("/comics/$comic->id/edit") }}" class="btn btn-warning my-3">Modifica</a>
                <a href="{{ route('comics.index') }}" class="btn btn-secondary my-3">Indietro</a>
            </div>

        </div>
        <div class="advertisment">
            <h2>ADVERTISMENT</h2>
            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="{{ $comic->title }}">
        </div>
    </div>
@endsection
