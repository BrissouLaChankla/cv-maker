@extends('layouts.admin.app')
@section('content')
<div class="p-5">
    <h1>Bienvenue {{$user->name}}</h1>
<h1>Vos informations personnelles</h1>
    <div class="alert alert-dark shadow-sm" role="alert">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <label for="formGroupExampleInput">Prénom</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput2">Nom</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput">Prénom</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput2">Nom</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput">Date d'anniversaire</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput2">Nom</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput">Prénom</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput2">Nom</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                </div>
                
            </div>
          </form>
      </div>
</div>

@endsection