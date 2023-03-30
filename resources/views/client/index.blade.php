@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Listes des Clients
                    </h2>
                </div>
                <div class="card-body">
                    <br> <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Numero de Telephone</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $users as $c)
                                <tr>
                                   <th>{{$c->name}}</th>
                                   <th>{{$c->prenom}}</th>
                                   <th>{{$c->tel}}</th>
                                   <th>{{$c->email}}</th>
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