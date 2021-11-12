@extends('layouts.admin.app')

@section('content')

<div class="p-5">
    <h2>Votre portfolio</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt facere porro voluptatum, saepe blanditiis
        veritatis odit sint ab vel natus maxime exercitationem, omnis magnam dignissimos numquam ad pariatur aperiam
        tempora?</p>
        <h3 class="mt-5">Ajoutez vos réalisations</h3>

        <a class="btn btn-primary" data-toggle="collapse" href="#collapseAddRea" role="button" aria-expanded="false" aria-controls="collapseAddRea">
            Ajouter une réalisation
          </a>
        <div class="collapse" id="collapseAddRea">
          <div class="card card-body">
            {!! Form::open(['url' => '/create/rea']) !!}
            <div class="row">
                <div class="col-md-6 mt-2">
                    {{ Form::label('name', 'Nom du projet') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('description', 'Description détaillée') }}
                    <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                        title="Il nous faut une description de ton projet, n'hésite pas à entrer un peu dans les détails (~500 caractères)"></i>
                    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('short_description', 'Description courte') }}
                    <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                        title="Une description plus courte en 10 mots pour donner un aperçu depuis la page principale, tu peux laisser vide si t'as la flemme... 🤷‍♂️"></i>
                    {{ Form::textarea('short_description', null, ['class' => 'form-control']) }}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('date', 'Date (environ) du projet') }}
                    {{ Form::date('date', null, ['class' => 'form-control']) }}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('name', 'Lien du projet (facultatif)') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="w-100 text-right px-3 pt-3 pb-0">
                    {{ Form::submit('Créer', ['class' => 'btn btn-primary btn-lg']) }}
                </div>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
            @foreach ($realisations as $realisation)
                <a class="btn btn-secondary w-100 p-4 mt-3" data-toggle="collapse" href="#collapseRea{{ $realisation->id }}"
                    role="button" aria-expanded="false" aria-controls="collapseRea{{ $realisation->id }}">
                    {{$realisation->name}}
                </a>
                <div class="collapse" id="collapseRea{{ $realisation->id }}">
                    <div class="alert alert-dark shadow-sm" role="alert">
                        <div class="row">
                            <div class="col-md-2">
                                {!! Form::open(['method' => 'post', 'route' => 'edit-logo-rea', 'files' => 'true', 'class' =>'edit-picture']) !!}
                                    {{ Form::label('logo_path', 'Logo du projet') }}
                                    {!! Form::file('logo_path', ['class'=>'d-none', 'id' => 'edit-logo-rea']) !!}    
                                    <div class="position-relative change-pic change-logo-style pointer"  data-url="/edit/logo/rea">
                                        <img src="{{asset('storage/uploads/realisations/logo/'.$realisation->logo_path)}}" class="img-fluid ">
                                        <span class="text-white icon-hover">
                                            <i class="fas fa-camera-retro"></i>
                                        </span>
                                    </div>
                                    {!! Form::hidden('id', $realisation->id) !!}
                                {!! Form::close() !!}
                            </div>

                            <div class="col-md-5">
                                {!! Form::open(['method' => 'post', 'route' => 'edit-background-rea', 'files' => 'true', 'class' =>'edit-picture']) !!}
                                {{ Form::label('background_path', 'background du projet') }}
                                {!! Form::file('background_path', ['class'=>'d-none', 'id' => 'edit-background-rea']) !!}    
                                <div class="position-relative change-pic change-background-style pointer"  data-url="/edit/background/rea">
                                    <img src="{{asset('storage/uploads/realisations/background/'.$realisation->background_path_small)}}" class="img-fluid ">
                                    <span class="text-white icon-hover">
                                        <i class="fas fa-camera-retro"></i>
                                    </span>
                                </div>
                                {!! Form::hidden('id', $realisation->id) !!}
                            {!! Form::close() !!}
                            </div>

                        </div>
                        {!! Form::open(['url' => '/edit/rea', 'class'=>'ajax']) !!}
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                {{ Form::label('name', 'Nom du projet') }}
                                {{ Form::text('name', $realisation->name, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-6 mt-2">
                                {{ Form::label('description', 'Description détaillée') }}
                                <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                                    title="Il nous faut une description de ton projet, n'hésite pas à entrer un peu dans les détails (~500 caractères)"></i>
                                {{ Form::textarea('description', $realisation->description, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-6 mt-2">
                                {{ Form::label('short_description', 'Description courte') }}
                                <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                                    title="Une description plus courte en 10 mots pour donner un aperçu depuis la page principale, tu peux laisser vide si t'as la flemme... 🤷‍♂️"></i>
                                {{ Form::textarea('short_description', $realisation->short_description, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-6 mt-2">
                                {{ Form::label('date', 'Date (environ) du projet') }}
                                {{ Form::date('date', $realisation->date, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-6 mt-2">
                                {{ Form::label('link', 'Lien du projet (facultatif)') }}
                                {{ Form::text('link', $realisation->link, ['class' => 'form-control']) }}
                            </div>
                            <div class="w-100 text-right px-3 pt-3 pb-0">
                                {{ Form::submit('Mettre à jour', ['class' => 'btn btn-primary btn-lg']) }}
                            </div>
                            
                        </div>
                        {{ Form::hidden('id', $realisation->id) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            @endforeach
</div>

@endsection
