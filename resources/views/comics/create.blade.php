@extends('layouts.app')

@section('title', 'Crea Nuovo Comic')

@section('cdns')
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' />
@endsection

@section('core-content')
<section id="creation-card">
    <div class="container">
        <h1>Crea Nuovo Comic</h1>
        <div class="creation-form card-body">
            <form action="" method="">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo Comic</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Inserisci un titolo">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="series" class="form-label">Serie Comic</label>
                            <input type="text" name="series" class="form-control" id="series" placeholder="Inserisci una serie">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="type" class="form-label">Categoria Comic</label>
                            <input type="text" name="type" class="form-control" id="type" placeholder="Inserisci un tipo">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Copertina Comic</label>
                            <input type="url" name="thumb" class="form-control" id="thumb" placeholder="Inserisci un link">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo Comic</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Inserisci un prezzo">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Data Comic</label>
                            <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Inserisci una data">
                          </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione Comic</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Inserisci una descrizione" rows="4"></textarea>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="artists" class="form-label">Artisti Comic</label>
                            <input type="text" name="artists" class="form-control" id="artists" placeholder="Inserisci gli artisti">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="writers" class="form-label">Scrittori Comic</label>
                            <input type="text" name="writers" class="form-control" id="writers" placeholder="Inserisci gli scrittori">
                          </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-end align-items-center gap-2">
                    <button type="submit" class="btn btn-success">Crea Comic</button>
                    <button type="reset" class="btn btn-secondary">Svuota Comic</button>
                </div>
            </form>
        </div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary my-3">Indietro</a>
    </div>
</section>
@endsection
