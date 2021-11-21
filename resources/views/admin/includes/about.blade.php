@extends('layouts.admin.app')
@section('content')
<div class="p-4 p-md-5">
    <h2>Vos informations personnelles</h2>
        <div class="alert alert-dark shadow-sm" role="alert">
            {!! Form::open(['url' => '/edit/about', 'class' => 'ajax']) !!}
                <div class="row">
                    <div class="col-md-6 mt-2">
                        {{ Form::label('firstname', 'Prénom') }}
                        {{ Form::text('firstname', $about->firstname, ['class' =>'form-control'])}}
                    </div>
                    <div class="col-md-6 mt-2">
                        {{ Form::label('lastname', 'Nom') }}
                        {{ Form::text('lastname', $about->lastname, ['class' =>'form-control'])}}
                    </div>
                    <div class="col-md-6 mt-2">
                        {{ Form::label('description', 'Description de ta personne') }} 
                        <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip" title="Première phrase sur ta personne qui apparaîtra sur le site, résume toi brièvement, qui tu es etc.."></i>
                        {{ Form::textarea('description', $about->description, ['class' =>'form-control'])}}
                    </div>
                    <div class="col-md-6 mt-2">
                        {{ Form::label('details', 'Détails de ton poste') }}
                        <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip" title="Parle nous de ton poste, en quoi consiste ton métier ?"></i>
                        {{ Form::textarea('details', $about->details, ['class' =>'form-control'])}}
                    </div>
                    <div class="col-md-6 mt-2">
                        {{ Form::label('birthday', 'Date anniversaire') }}
                        {{ Form::date('birthday', $about->birthday, ['class' =>'form-control'])}}
                    </div>
                    <div class="col-md-6 mt-2">
                        {{ Form::label('diploma', 'Niveau d\'étude') }}
                        {{ Form::text('diploma', $about->diploma, ['class' =>'form-control', 'placeholder' => 'Master 2'])}}
                    </div>
                    <div class="col-md-6 mt-2">
                        {{ Form::label('phone', 'N° de téléphone') }}
                        {{ Form::text('phone', $about->phone, ['class' =>'form-control'])}}
                    </div>
                    <div class="col-md-6 mt-2">
                        {{ Form::label('email', 'Email') }}
                        <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                        title="C'est sur ce mail que les mails du formulaire de contact seront envoyés !"></i>
                        {{ Form::email ('email', $about->email, ['class' =>'form-control'])}}
                    </div>
                    <div class="col-md-6 mt-2">
                        {{ Form::label('location', 'Localisation') }}
                        {{ Form::text('location', $about->location, ['class' =>'form-control', 'placeholder' => 'Régulièrement entre les Alpes-Martimes (06) et le Var (83)'])}}
                    </div>
                    <div class="col-md-6 mt-2">
                        {{ Form::label('status', 'Status') }}
                        {{ Form::text('status', $about->status, ['class' =>'form-control', 'placeholder' => 'Alternant / Freelance'])}}
                    </div>
                    <div class="col-md-6 mt-2">
                        {{ Form::label('hobbies', 'Hobbies') }}
                        {{ Form::text('hobbies', $about->hobbies, ['class' =>'form-control','placeholder' => 'Sport / Jeux-vidéos / Programmation'])}}
                    </div> 
                    <div class="w-100 text-right p-3">
                        {{ Form::submit('Enregistrer', ['class' => 'btn btn-primary btn-lg'])}}
                    </div>
                </div>
            {!! Form::close() !!}
          </div>

        <h2 class="mt-5">Informations supplémentaires</h2>
          <div class="alert alert-dark shadow-sm " role="alert">
              <div class="row">
                  <div class="col-md-6 mt-2">
                      
                        {!! Form::open(['url' => '/edit/cv', 'class' => '', 'files' => true]) !!}
                            {{ Form::label('cv', 'CV') }}
                            <small>(.pdf)</small>
                            {!! Form::file('cv') !!}
                            {{ Form::submit('Mettre à jour CV', ['class' => 'btn btn-primary']) }}
                        {!! Form::close() !!}

                        {!! Form::open(['method' => 'post', 'route' => 'edit-profile', 'class' => 'change-image-dynamic', 'files' => 'true']) !!}

                        {{ Form::label('profile', 'Photo de toi') }}
                        {!! Form::file('profile', ['class' => 'd-none']) !!}
                        <div class="position-relative change-pic change-background-style pointer">
                            <img src="{{ asset('img/profile.webp') }}"
                                class="img-fluid rounded">
                            <span class="text-white icon-hover">
                                <i class="fas fa-camera-retro"></i>
                            </span>
                        </div>
                    {!! Form::close() !!}

                    </div>
                    
                    <div class="col-md-6 mt-2">
                        {!! Form::open(['method' => 'post', 'route' => 'edit-background', 'class' => 'change-image-dynamic', 'files' => 'true']) !!}
                        {{ Form::label('background', 'Image de fond') }}
                        <small>(min. 1920x1080)</small>
                        <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                        title="Cette image apparait tout en haut de votre site et prends toute la largeur et hauteur, choisissez là bien ! Il faut que du texte blanc puisse se lire dessus (nous l'assombrissons)"></i>
                        {!! Form::file('background', ['class' => 'd-none']) !!}
                        <div class="position-relative change-pic change-background-style pointer">
                            <img src="{{ asset('img/background.webp') }}"
                                class="img-fluid rounded">
                            <span class="text-white icon-hover">
                                <i class="fas fa-camera-retro"></i>
                            </span>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    </div>
                </div>
          </div>
</div>

@endsection
