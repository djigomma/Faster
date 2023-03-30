@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tableau de bord client') }}
                    <a href="{{asset('/reservation/show')}}" class="btn btn-primary btn-sm text-white float-end">Voir mes Courses</a>
                </div>
            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('ajoutR') }}">
                        @csrf

                        <div class="col-md-6 p-2">
                            <input type="hidden" value="{{ auth()->user()->id }}" name="client_id">
                            <label for="">Lieu de depart</label>
                            <select name="lieu_depart_id" id=""  class="form-control">
                                <option value="" selected disabled>---Selectionner Le Lieu de Depart---</option>
                                @foreach($lieus as $l)
                                <option value="{{ $l->id}}">{{ $l->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 p-2">
                            <label for="">Lieu de Arriver</label>
                            <select name="lieu_arrivee_id" id=""  class="form-control">
                                <option value="" selected disabled>---Selectionner Le Lieu d' Arriver'---</option>
                                @foreach($lieus as $ls)
                                
                                <option value="{{ $ls->id}}">{{ $ls->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 p-2">
                            <label for="">Chauffeur</label>
                            <select name="chauffeur_id" id=""  class="form-control">
                                <option value="" selected disabled>---Selectionner Votre Chauffeur---</option>
                                @foreach($chauffeurs as $re)
                                <option value="{{ $re->id}}">{{ $re->nom}} {{ $re->prenom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 p-2">
                            <button type="submit" class="btn btn-success m-3">Commander</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
