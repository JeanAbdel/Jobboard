@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Créer une entreptise</h1>
                    </div>
                    <div class="card-body">
                        <form method='POST' action="{{route('enregistrerEntreprise')}}">
                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">
                                    Raison sociale
                                </label>
                                <input type="text" id="nom" name="nom" value="{{old("nom")}}" class="form-control col-md-6" placeholder="Nom de l'entreprise" required>
                            </div>

                            <div class="form-group row">
                                <label for="siret" class="col-md-4 col-form-label text-md-right">
                                    SIRET
                                </label>
                                <input type="text" id="siret" name="siret" value="{{old("siret")}}" class="form-control col-md-6" placeholder="Numero de SIRET">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection