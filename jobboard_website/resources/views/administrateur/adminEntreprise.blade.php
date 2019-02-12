@extends('layouts.master')

@section('content')

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h1>Entreprises</h1>
                <a href="{{route('creerEntreprise')}}"> <button class="btn-success" id="btnEntrepriseAdmin">Ajouter une entreprise</button></a>
            </div>
        </div>

        @foreach($entreprises as $entreprise)
         <div class="row" id="btnEntrepriseAdmin">
             <div class="col-4 col-md-4">
                 <p>{{$entreprise->nom}}</p>
             </div>

             <div class="col-4 col-md-4">
                    <button class="btn-secondary">Modifier</button>
             </div>

             <div class="col-4 col-md-4">
                 <button class="btn-danger">Supprimer</button>
             </div>


        </div>
        @endforeach
    </div>




@endsection
