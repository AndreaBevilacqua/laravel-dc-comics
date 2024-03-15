@extends('layouts.app')

@section('title', 'Crea Nuovo Comic')

@section('cdns')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
@endsection

@section('core-content')
<section id="creation-card">
    <div class="container">
        <h1>Crea Nuovo Comic</h1>
        <div class="creation-form">
            <form action="" method="">
                <div class="row">
                    <div class="col">
                        
                    </div>
                </div>
            </form>
        </div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary my-3">Indietro</a>
    </div>
</section>
@endsection
