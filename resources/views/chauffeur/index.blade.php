@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Listes des Chauffeurs
                    </h2>
                </div>
                <div class="card-body">
                    <br> <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>N</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Age</th>
                                    <th>CNI</th>
                                    <th>Numero de Permis</th>
                                    <th>Marque de Voiture</th>
                                    <th>Matricule de Voiture</th>
                                    <th>Numero de Telephone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $chauffeurs as $c)
                                    <tr>
                                       <td>{{$c->id}}</td>
                                       <td>{{$c->nom}}</td>
                                       <td>{{$c->prenom}}</td>
                                       <td>{{$c->age}}</td>
                                       <td>{{$c->CNI}}</td>
                                       <td>{{$c->numPermis}}</td>
                                       <td>{{$c->marqueVoiture}}</td>
                                       <td>{{$c->matriculeVoiture}}</td>
                                       <td>{{$c->tel}}</td>
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