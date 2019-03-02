@extends('layouts.master')

@section('content')
        
    <div class="container">
        <div class="card">
            <h1 class="card-header">Nos Etudiants</h1>
            <div class="card-body">
                @foreach($etudiants as $etu)
                    @if($etu->idUser != null && $etu->actif==1)
                    <div class="border p-3 mt-2">
                        <p>{{$etu->user->nom}} {{$etu->user->prenom}} {{$etu->DateDeNaissance}} {{$etu->etudes}}</p>
                        @if($etu->rechercheStage==1)
                        <p> A la recherche un stage</p>
                        @endif
                        <a href="{{ route('consult_profile',["id"=>$etu->id])}}" class="btn btn-success">Voir le Profil</a>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection

