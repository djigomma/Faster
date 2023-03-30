@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tableau de bord client') }}
                    <a href="{{asset("home")}}" class="btn btn-primary btn-sm text-white float-end">Commander un Taxi</a>
                </div>
            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom du chauffeur</th>
                                    <th>Lieu de Depart</th>
                                    <th>Lieu d'arriver</th>
                                    <th>Date et heure</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach( $reservations as $r)
                                    <tr>
                                        <td>
                                            @if($r->chauffeur_id)
                                                {{$r->chauffeur->nom}} {{$r->chauffeur->prenom}}
                                            @endif    
                                        </td>
                                        <td>
                                            @if($r->lieu_depart_id)
                                                {{$r->lieu->nom}}
                                            @endif    
                                        </td>
                                        <td>
                                            @if($r->lieu_arrivee_id)
                                                {{$r->lieu2->nom}}
                                            @endif    
                                        </td>
                                        <td>{{$r->created_at}}</td>
                                       
                                    </tr>
                                @endforeach     
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
