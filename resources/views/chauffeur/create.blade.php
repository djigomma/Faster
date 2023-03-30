@extends('layouts.admin')

@section('content')

 <div class="container ">
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Ajouter une Formation</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('ajoutC')}}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6 p-2">
                                <label for="">Nom</label>
                                <input type="text" name="nom"  class="form-control">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Prenom</label>
                                <input type="text" name="prenom"  class="form-control">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Age</label>
                                <input type="number" name="age"  class="form-control">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Numero de Telephone</label>
                                <input type="text" name="tel"  class="form-control">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">CNI</label>
                                <input type="text" name="CNI"  class="form-control">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Numero de Permis</label>
                                <input type="text" name="numPermis"  class="form-control">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Marque de Voiture</label>
                                <input type="text" name="marqueVoiture"  class="form-control">
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="">Matricule de Voiture</label>
                                <input type="text" name="matriculeVoiture"  class="form-control">
                            </div>
                            <div class="col-md-2 p-2">
                                <button type="submit" class="btn btn-success m-3">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
 @endsection