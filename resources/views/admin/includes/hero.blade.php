@extends('layouts.admin.app')

@section('content')

<div class="p-4 p-md-5">
    <h2>Textes du hero banner</h2>
        <div class="alert alert-dark shadow-sm" role="alert">
            {!! Form::open(['url' => '/edit/hero', 'class' => 'ajax']) !!}
                <div class="row">
                    <div class="col-md-6 mt-2">
                        {{ Form::label('welcome', 'Mot d\'accueil') }}
                        {{ Form::text('welcome', $herotexts->welcome, ['class' =>'form-control'])}}
                    </div>
                    <div class="col-md-6 mt-2">
                        {{ Form::label('first_phrase', 'Première phrase') }}
                        {{ Form::text('first_phrase', $herotexts->first_phrase, ['class' =>'form-control'])}}
                    </div>
                    <div class="col-md-6 mt-2">
                        {{ Form::label('second_phrase', 'Seconde phrase') }}
                        {{ Form::text('second_phrase', $herotexts->second_phrase, ['class' =>'form-control'])}}
                    </div>
                    <div class="w-100 text-right p-3">
                        {{ Form::submit('Enregistrer', ['class' => 'btn btn-primary btn-lg'])}}
                    </div>
                </div>
            {!! Form::close() !!}
          </div>

@endsection
