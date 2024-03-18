@extends('layouts.app')

@section('title','Modifica Comic')

@section('cdns')
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
@endsection

@section('core-content')
<section id="creation-card">
    <div class="container">
        <h1>Modicia Comic</h1>
        <div class="creation-form card-body">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                {{-- <input type="hidden" name="csrf_token" value="{{ get_csrf( )}}"> --}}
                {{-- <input type="hidden" name="_method" value="PUT"> --}}
                @csrf 
                @method('PUT')

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo Comic</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Inserisci un titolo" value="{{ old('title', $comic->title )}}">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="series" class="form-label">Serie Comic</label>
                            <input type="text" name="series" class="form-control" id="series" placeholder="Inserisci una serie" value="{{ old('series', $comic->series )}}">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="type" class="form-label">Categoria Comic</label>
                            <input type="text" name="type" class="form-control" id="type" placeholder="Inserisci un tipo" value="{{ old('type', $comic->type )}}">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Copertina Comic</label>
                            <input type="url" name="thumb" class="form-control" id="thumb" placeholder="Inserisci un link" value="{{ old('thumb', $comic->thumb )}}">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo Comic</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Inserisci un prezzo" value="{{ old('price', $comic->price )}}">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Data Comic</label>
                            <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Inserisci una data" value="{{ old('sale_date', $comic->sale_date )}}">
                          </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione Comic</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Inserisci una descrizione" rows="4" value="{{ old('description', $comic->description )}}"></textarea>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="artists" class="form-label">Artisti Comic</label>
                            <input type="text" name="artists" class="form-control" id="artists" placeholder="Inserisci gli artisti" value="{{ old('artists', $comic->artists )}}">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="writers" class="form-label">Scrittori Comic</label>
                            <input type="text" name="writers" class="form-control" id="writers" placeholder="Inserisci gli scrittori" value="{{ old('writers', $comic->writers )}}">
                          </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-end align-items-center gap-2">
                    <button type="submit" class="btn btn-success">Modifica Comic</button>
                    <button type="reset" class="btn btn-secondary">Svuota Comic</button>
                </div>
            </form>
        </div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary my-3">Indietro</a>
    </div>
</section>
@endsection
